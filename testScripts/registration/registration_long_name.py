from selenium import webdriver
from selenium.webdriver.common.keys import Keys

import random
import string

def random_string_generator(str_size, allowed_chars):
    return ''.join(random.choice(allowed_chars) for x in range(str_size))

driver = webdriver.Chrome()
chars = string.ascii_letters + string.punctuation
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

email.send_keys('jon.snow@email.com')
pw.send_keys('12345678')
pwc.send_keys('12345678')

driver.save_screenshot('register_fill_no_name_inp.jpg')

name.send_keys(random_string_generator(254, chars))
driver.save_screenshot('register_fill_name_254_inp.jpg')

submit = driver.find_element_by_id("submit")
submit.click()
driver.implicitly_wait(10)
driver.save_screenshot('register_no_inp_error_email.jpg')
