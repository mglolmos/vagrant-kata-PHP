
**Vagrant kata PHP**
===================
Virtual machine with vagrant for do kata exercises in PHP.

##Steps to Start
1. Clone repository
	
	```
	git clone https://github.com/mglolmos/vagrant-kata-php.git
	```
	or
	```
	git clone https://github.com/mglolmos/vagrant-kata-php.git <name_folder_kata>
	```
2. Go to clone repository
	
	```
	cd vagrant-kata-php
	```
	or
	```
	cd <name_folder_kata>
	```
3. Start vagrant machine
	
	```
	vagrant up
	```
4. Connect with SSH to vagrant machine
	```
	vagrant ssh
	```
5. Launch the test
	
	```
	/kata/vendor/bin/phpunit --configuration /kata/phpunit.xml /kata/test
	```
6. Now, you can start the kata in your host machine in ```/path/where/clone/repository/kata```and execute the test like step 5.

---
##Steps to Stop
1. Stop vagrant machine
	
	```
	vagrant halt
	```
2. If you want delete vagrant machine
	
	```
	vagrant destroy
	```

---
##Shared folders
| Host Machine                      | Vagrant Machine|
| --------------------------------- |:--------------:|
| /path/where/clone/repository      | /vagrant       |
| /path/where/clone/repository/kata | /kata          |

---
##Package
This vagrant contains the next packages:
>- php5
>- phpunit
>- composer
>- curl