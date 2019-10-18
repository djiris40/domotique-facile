#!/usr/bin/python
import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
GPIO.setup(12, GPIO.OUT) #haut sa 1
GPIO.setup(16, GPIO.OUT) #bas sa 1
GPIO.setup(22, GPIO.OUT) #haut sa 2
GPIO.setup(27, GPIO.OUT) #bas sa 2


GPIO.output(12, GPIO.LOW) #monter on sa 1
GPIO.output(16, GPIO.HIGH) #descendre off sa 1
GPIO.output(22, GPIO.LOW)
GPIO.output(27, GPIO.HIGH)
