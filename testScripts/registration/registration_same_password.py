from selenium import webdriver
from selenium.webdriver.common.keys import Keys

import random
import string

driver = webdriver.Chrome()
driver.get('http://localhost/LoanDemo/public/')

register_btn = driver.find_element_by_id("register")
register_btn.click()

email = driver.find_element_by_id("email")
pw = driver.find_element_by_id("password")
name = driver.find_element_by_id("name")
pwc = driver.find_element_by_id("password-confirm")

email.clear()
pw.clear()
name.clear()
pwc.clear()

name.send_keys('Bran Stark')
email.send_keys('bran.stark@email.com')

driver.save_screenshot('register_fill_no_pass_inp.jpg')

pw.send_keys('12345678')
pwc.send_keys('12345678')

driver.save_screenshot('register_fill_same_pass.jpg')

submit = driver.find_element_by_id("submit")
submit.click()
driver.implicitly_wait(10)
driver.save_screenshot('register_same_pass.jpg')
