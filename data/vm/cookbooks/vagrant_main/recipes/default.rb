include_recipe "apt"
include_recipe "build-essential"
include_recipe "networking_basic"
include_recipe "apache2"
include_recipe "apache2::mod_php5"
include_recipe "apache2::mod_rewrite"
include_recipe "apache2::mod_deflate"
include_recipe "apache2::mod_headers"
include_recipe "mysql::server"
include_recipe "vagrant_main::custom_php"
# include_recipe "elasticsearch"
include_recipe "ant"
include_recipe "memcached"

# Install mysql gem
gem_package "mysql" do
  action :install
end

ruby_block "Create database + execute grants" do
  block do
    require 'rubygems'
    Gem.clear_paths
    require 'mysql'
    m = Mysql.new("localhost", "root", "")
    m.query("CREATE DATABASE IF NOT EXISTS app CHARACTER SET utf8")
    m.reload
  end
end

# Initialize web app
web_app "default" do
    template "default.conf.erb"
    server_name "localhost"
    server_aliases [node['fqdn'], "localhost"]
    docroot "/vagrant/public"
end
