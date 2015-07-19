# Responsive Design for thenewboston

This project is for the responsive design for thenewboston website. A preview of the site can be seen here:

http://104.131.1.2/content/account/index.php

## Getting Started

First, we need to install and configure XAMPP so that we have a local environment for development.

### Step 1

Download and install XAMPP from [the official XAMPP website](https://www.apachefriends.org/index.html).
* XAMPP is installed using a simple wizard
* Keep all of the default settings during installation

![](http://i.imgur.com/jK0Xeon.png)

***

### Step 2

After XAMPP is installed, open the file `C:\xampp\apache\conf\extra\httpd-vhosts.conf` 

![](http://i.imgur.com/mvwnGfi.png)

***

### Step 3

Add the following code snippet to the bottom.
* This tells XAMPP that when we go to tnb-res.com in our browser, take us to this folder

```
## Custom configuration

NameVirtualHost *:80

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/thenewboston-Responsive-Design"
    ServerName tnb-res.com
</VirtualHost>
```

![](http://i.imgur.com/c802j58.png)

***

We will now edit Windows host file so that our computer can recognize our new domain name.

### Step 4

Open the file `C:\Windows\System32\drivers\etc\hosts`

![](http://i.imgur.com/8NY7D2K.png)

***

### Step 5

Add the following code snippet to the bottom and save the file.

```
127.0.0.1       localhost
127.0.0.1       tnb-res.com
```

![](http://i.imgur.com/V83y292.png)

***

### Step 6

If you are not able to save the file in that folder due to permission settings, first save the file to your Desktop.
* Make sure that the file type selected is `All types (".")`

![](http://i.imgur.com/M94vqJx.png)

Once saved, drag and replace the file using Windows explorer. 

![](http://i.imgur.com/sP0UIxe.png)

***

You can now download the source code for the website so that you will have a copy for development.

### Step 7

Download [GitHub for Windows](https://windows.github.com/).
* GitHub for Windows allows you to easily download and manage your GitHub repositories from your own computer.

![](http://i.imgur.com/RJk3m0g.png)

***

### Step 8

On the top right of this page click "Fork". 
* This will create a copy of the project to your GitHub account.

![](http://i.imgur.com/pcmhvEr.png)

***

### Step 9

Open GitHub for Windows and sign in to your GitHub account. Then click the plus button and you will be able to clone the repository for the project.
* This will download the project to your computer

![](http://i.imgur.com/Uli8pWn.png)

Make sure to clone the project into your `C:\xampp\htdocs\` directory

![](http://i.imgur.com/U6iqckp.png)

***

### Step 10

Once all files have been downloaded, open up XAMPP and start Apache and MySQL.
* When Apache and MySQL are running, your computer will act as a web server and you can host websites locally.

![](http://i.imgur.com/zPphQkf.png)

***

Setup is now complete! You can visit the site by going to: [http://tnb-res.com/responsive/content/account/index.php](http://tnb-res.com/responsive/content/account/index.php)

![](http://i.imgur.com/mt3jzEM.png)
