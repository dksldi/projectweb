#!/bin/bash

name=${1}
ns=${2}
count=${3}
mem=${4}
cpu=${5}
reqmem=${6}
reqcpu=${7}
str=${8}
host1=${9}
host2=${10}
host3=${11}
atsl=${12}
atsm=${13}


sudo cp /root/disk/yaml/projectnginx.yaml /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/passname/${name}/g" /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/namespace: nasp/namespace: ${ns}/g" /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/repnum1/${count}/g" /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/mem1/${mem}/g" /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/cpu1/${cpu}/g" /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/reqmem/${reqmem}/g" /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/reqcpu/${reqcpu}/g" /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/str1/${str}/g" /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/1hsts.2hsts.3hsts/${host1}.${host2}.${host3}/g" /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/atsl/${atsl}/g" /root/projectyaml/${name}nginx.yaml
sudo sed -i "s/atsm/${atsm}/g" /root/projectyaml/${name}nginx.yaml
sudo kubectl apply -f /root/projectyaml/${name}nginx.yaml
