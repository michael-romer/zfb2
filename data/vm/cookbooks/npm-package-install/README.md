# Cookbook for Node Package Manager

##DESCRIPTION:
It provides some LWRP's for installing node packages

##REQUIREMENTS:
This cookbook depends on https://github.com/mdxp/cookbooks/tree/master/nodejs/

##ATTRIBUTES:
The attributes specify the location of the data_bag used to install npm
packages.

```
default['npm']['data_bag_name'] = 'npm-packages'
default['npm']['data_bag_item'] = 'packages'
```

##USAGE:
Add a data_bag to `npm_packages/` called `packages.json`. This data_bag lists
the packages that you want installed by `npm`.

###Example data_bag

```
{
    "id": "packages",
    "packages": [
        {
            "name": "docpad",
            "version": "6.38.0"
        }
    ]
}
```
