Vagrant.configure("2") do |config|
      config.vm.box = "precise64"
      config.vm.box_url = "http://files.vagrantup.com/precise64.box"
      config.vm.network :forwarded_port, guest: 80, host: 8080
      config.vm.network :forwarded_port, guest: 3306, host: 3306
      config.ssh.max_tries = 50
      config.ssh.timeout   = 300
      config.vm.synced_folder ".", "/vagrant", :id => "vagrant-root", :owner => "vagrant", :group => "www-data"
      config.vm.provision :chef_solo do |chef|
         chef.cookbooks_path = "data/vm/cookbooks"
         chef.add_recipe("vagrant_main")
         chef.log_level = :debug
         # Configure http(s) proxy if needed (requires Vagrant >= 0.7.4)
         # chef.http_proxy = "http://proxy.vmware.com:3128"
         # chef.https_proxy = "http://proxy.vmware.com:3128"
         # chef.http_proxy_user = "my_username"
         # chef.http_proxy_pass = "foo"
         chef.json.merge!({ :mysql => { :server_root_password => "" } })
      end
end