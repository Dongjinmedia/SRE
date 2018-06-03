# Challenge for SRE

### Step 1: First of all. Create a 3-tier architecture using GCP.
![Alt text](/png)

https://managementmania.com/en/three-tier-architecture

(1) Created SQL instance with mysql on GCP. 
- name: rdb, userid: db, password:db, database: mysql 

(2) Created instance group "instance-group-1" for auto scaling.

(3) Created VM instance with Centos7 for web server.
- I have installed the lastest version of PHP and apache on this instance.


### Step 2: Create Table called "visitor_counter" by executing the below SQL statement on SQL instance.


CREATE TABLE 'visitor_counter' ( 'counts' int(10) NOT NULL default '0' )


### Step 3: Create index.html File.

(1) It should be located in apache default directory can be found on httpd.conf file 
- /var/www/html

(2) Add index.php in DirectoryIndex line on middle of httpd.conf file.


### Step 4: Create results.php File for POST request.

Script Logic

(1) Database Connection
- I have to provide the database credentials to connect with my database.


(2) Select Total Numbers of Users
- Execute simple select query to get the total count from the database table.
- If total = 0 means first visitor in this case insert the value in table.


(3) Print unix time, count and message
- Display the timestamp as unix time, total count as visitor Count, and message.


(4) Increment
- Increment the total number by 1 to update the total numbers of counts.


### Step 5: Upgrade Security.

(1) Activate https 
- Encrypt communication to and from my website using SSL
- I have registered cloudflare nameserver on my domain registrar.
- Redirect all requests with scheme “http” to “https”.

(2) Block all unused port.
- Setting up rules on GCP firewall.

(3) Enable SElinux and iptables on VM instance.


### Step 6: Support High Availability.

- Make load balancer on GCP with my instance group.
- An load balancer spreads load across backend services, which distributes traffic among instance groups.


### Step 7: Please visit at https://www.dongjin.bid
