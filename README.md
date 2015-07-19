### Responsive Design for thenewboston

**First, we need to install and configure XAMPP so that we have a local environment for development.**

***

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
* This tells XAMPP that when we go to developers.thenewboston.com in our browser, take us to this folder

```
## Custom configuration

NameVirtualHost *:80

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/thenewboston-Social-Network"
    ServerName tnb-dev.com
</VirtualHost>
```

![](http://i.imgur.com/4tQLlke.png)

***

XAMPP is now installed and setup properly. You are now ready to [edit your Windows host file](https://github.com/thenewboston-developers/thenewboston-Social-Network/wiki/Edit-Windows-Host-File).

**We will now edit Windows host file so that our computer can recognize our new domain name.**

***

### Step 1

Open the file `C:\Windows\System32\drivers\etc\hosts`

![](http://i.imgur.com/8NY7D2K.png)

***

### Step 2

Add the following code snippet to the bottom and save the file.

```
127.0.0.1       localhost
127.0.0.1       tnb-dev.com
```

![](http://i.imgur.com/TFqmgRE.png)

***

### Step 3

If you are not able to save the file in that folder due to permission settings, first save the file to your Desktop.
* Make sure that the file type selected is `All types (".")`

![](http://i.imgur.com/M94vqJx.png)

Once saved, drag and replace the file using Windows explorer. 

![](http://i.imgur.com/sP0UIxe.png)

***

Your local development environment is now ready. We can now [download and setup the project](https://github.com/thenewboston-developers/thenewboston-Social-Network/wiki/Forking-the-Repository).

**You can now download the source code for the website so that you will have a copy for development.**

***

### Step 1

Download [GitHub for Windows](https://windows.github.com/).
* GitHub for Windows allows you to easily download and manage your GitHub repositories from your own computer.

![](http://i.imgur.com/RJk3m0g.png)

***

### Step 2

Go to the homepage for [thenewboston Social Network here](https://github.com/thenewboston-developers/thenewboston-Social-Network). On the top right of the page click "Fork". 
* This will create a copy of the project to your GitHub account.

![](http://i.imgur.com/pcmhvEr.png)

***

### Step 3

Open GitHub for Windows and sign in to your GitHub account. Then click the plus button and you will be able to clone the repository for the project.
* This will download the project to your computer

![](http://i.imgur.com/Uli8pWn.png)

Make sure to clone the project into your `C:\xampp\htdocs\` directory

![](http://i.imgur.com/U6iqckp.png)

***

### Step 4

Once all files have been downloaded, open up XAMPP and start Apache and MySQL.
* When Apache and MySQL are running, your computer will act as a web server and you can host websites locally.

![](http://i.imgur.com/zPphQkf.png)

***

Setup is now complete! You can visit the site by going to: [http://tnb-dev.com/](http://tnb-dev.com/)

![](http://i.imgur.com/mt3jzEM.png)
