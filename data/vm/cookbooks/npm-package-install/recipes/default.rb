#
# Cookbook Name:: npm
# Recipe:: default
#
# Author:: Kevin Sookocheff <kevin.sookocheff@gmail.com>
#
# Copyright 2013, Kevin Sookocheff
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

include_recipe 'nodejs'

bag_path = node['npm']['data_bag_name']
bag_item = node['npm']['data_bag_item']

data_bag = data_bag_item(bag_path, bag_item)

for package in data_bag['packages']
    package_name = package['name']
    package_version = package['version']

    npm_package "#{package_name}@#{package_version}"
end

