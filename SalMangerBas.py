#!/usr/bin/python
import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
GPIO.setup(5, GPIO.OUT) #monter sm1
GPIO.setup(6, GPIO.OUT) #descente sm1





GPIO.output(5, GPIO.LOW) 
GPIO.output(6, GPIO.HIGH) 

