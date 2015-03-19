# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

  config.vm.box = "ubuntu/trusty64"

  config.vm.synced_folder "kata/", "/kata"

  config.vm.provider "virtualbox" do |vb|
    # Customize the amount of CPUs on the VM:
    vb.cpus = 1
    # Customize the amount of memory on the VM:
    vb.memory = "1024"
  end

  config.vm.provision "puppet" do |puppet|
    puppet.manifests_path = "puppet/manifests"
    puppet.manifest_file = "default.pp"
  end
end
