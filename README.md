 # :birthday::speech_balloon: BirthdayBOT 
## (Messenger Auto Send Birthday Wishes)

This BOT will allow you to Send Automatic Birthday Wishes For Your Facebook Friends Every Single Day 
### By AdemKouki : https://about.me/AdemKouki
Requirements :

 * VPS (OR your local machine)
 * Python (version 3.5.0 or higher)
 * Facebook Account (for sure 😜)
 * LAMP server (or anything similar)

------------------

1) First, you need to download these files.. 

2) Login to your facebook account, then open [This link](https://web.facebook.com/events/)

![alt text](https://i.imgur.com/ncm50Ib.png)

3) Right-click the link __Birthdays__ , Copy The Adress.. You will get a link like this
```javascript
webcal://web.facebook.com/ical/b.php?uid=100001217614623&key=XXXXXXXXXXXXXXXX
```
 Replace the __webcal://__ with __https://__ like this :
```javascript
https://web.facebook.com/ical/b.php?uid=100001217614623&key=XXXXXXXXXXXXXXXX
```

5) You will get a file with __.ics__ extension :

( iCalendar file: These are plain text files that include calendar event details like a description, beginning and ending times, location, etc. )

6) Make a new folder and put all files (ics file you download it from fb + github files) Together in the same folder

7) Rename it as : __cal.ics__ ( you must delete the old cal.ics file of course :sweat_smile: )


## Configuration :



##### Customize your Wishes (**modify config . py**) :
```javascript
wish = ['Hi {0}, Happy Birthday ^^']		
```

{0} is your friend facebook Name ... for exemple :

if your friend's name is "Adem", the the message will be    :  Hi __Adem__, Happy Birthday ^^

You Can also make random wishes ; Exemple :

```javascript
wish = ['Hi {0}, Happy Birthday ^^' , 
		'Love You {0}' ,
        'How are you {0}]',
        'Bla Bla Bla {0}']		
```

The bot will select a random wish for every friend ;) 

--------------------

##### Customize Images (**modify config . py**) :

* Example 1 : 
```javascript
images = ['https://i.imgur.com/oDEGLBY.jpg']
```

* Example 2 (Random Image) :
```javascript
images = ['https://i.imgur.com/oDEGLBY.jpg',
		  'https://i.imgur.com/7qffkxy.png',
          'https://i.imgur.com/5KOX5Vo.png',]
```

--------------------

##### Login & Password (**modify config . py**):

You need to use your facebook username & password :
```javascript
username = 'login@emailfb.com'
password = 'yourpassword'
```


--------------------

##### Schedule Time (**modify bot . py**):

You can change the time when your bot will send messages :
```javascript
schedule.every().day.at("12:33").do(BirthdayWish)
```

In this exemple the bot will send wishes at __12:33__ change it as you like :D 

:warning: :warning: :warning: Warning : The bot will your VPS server date and time ...

-----------
-----------

After Configuration, you need to put the folder in your LAMP (the default directory var/www/) in your VPS

1) Open your browser and open this URL : 
```javascript
http://{{server-ip-adress}}/birthdaybot/
```

it will says "Everything is OK" ...


2) Then,you must use __screen__ :

Screen allows you to:

* Use multiple shell windows from a single SSH session.
* Keep a shell active even through network disruptions.
* Disconnect and re-connect to a shell sessions from multiple locations.
* Run a long running process without maintaining an active shell session.


```javascript
cd var/www/birthdaybot
screen -S birthdaybot
```

3) you need to install python requirements using pip :
```javascript
pip install -r requirements.txt
```

Finally, Start Your Bot :D
```javascript
python bot.py
```


Don't forget to detach from your session :

Press [Ctrl+a] then [Ctrl+d]

















