#!/bin/bash

name=${1}
ns=${2}
count=${3}
str=${4}
host1=${5}
host2=${6}
host3=${7}

sudo mkdir /root/projectyaml/${name}wordpress
sudo cp /root/disk/yaml/projectwp/wordpress-deployment.yaml /root/projectyaml/${name}wordpress/
sudo cp /root/disk/yaml/projectwp/mysql-deployment.yaml /root/projectyaml/${name}wordpress/
sudo cp /root/disk/yaml/projectwp/kustomization.yaml /root/projectyaml/${name}wordpress/

sudo sed -i "s/passname/${name}/g" /root/projectyaml/${name}wordpress/wordpress-deployment.yaml
sudo sed -i "s/passname/${name}/g" /root/projectyaml/${name}wordpress/mysql-deployment.yaml
sudo sed -i "s/nasp/${ns}/g" /root/projectyaml/${name}wordpress/wordpress-deployment.yaml
sudo sed -i "s/nasp/${ns}/g" /root/projectyaml/${name}wordpress/mysql-deployment.yaml
sudo sed -i "s/repnum1/${count}/g" /root/projectyaml/${name}wordpress/wordpress-deployment.yaml
sudo sed -i "s/str1/${str}/g" /root/projectyaml/${name}wordpress/wordpress-deployment.yaml
sudo sed -i "s/str1/${str}/g" /root/projectyaml/${name}wordpress/mysql-deployment.yaml
sudo sed -i "s/1hsts.2hsts.3hsts/${host1}.${host2}.${host3}/g" /root/projectyaml/${name}wordpress/wordpress-deployment.yaml

sudo kubectl apply -k /root/projectyaml/${name}wordpress/kustomization.yaml

