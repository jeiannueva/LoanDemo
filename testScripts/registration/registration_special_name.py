# CREATED BY: FRANCIS GARCIA

from selenium import webdriver
from selenium.webdriver.common.keys import Keys


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

email.send_keys('example@gmail.com')
pw.send_keys('12345678')
pwc.send_keys('12345678')

driver.save_screenshot('register_fill_no_name_inp.jpg')

name.send_keys('Iñaki Parker')
driver.save_screenshot('register_fill_name_specialchars.jpg')

submit = driver.find_element_by_id("submit")
submit.click()
driver.implicitly_wait(10)
driver.save_screenshot('register_submit_specialchars.jpg')
