from fbchat import Client
from fbchat.models import *
import random
import config
import schedule
import time
import result

client = Client(config.username, config.password)

def BirthdayWish():
	for friend in result.friendlist:
		wish = random.choice(config.wish).format(result.friendlist[friend])
		client.sendRemoteImage(random.choice(config.images), message=wish, thread_id=friend, thread_type=ThreadType.USER)
		time.sleep(1)

schedule.every().day.at("12:33").do(BirthdayWish)

while True:
    schedule.run_pending()
    time.sleep(1)