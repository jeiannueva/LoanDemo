# CREATED BY: FRANCIS GARCIA

from selenium import webdriver
from selenium.webdriver.common.keys import Keys

driver = webdriver.Chrome()
driver.get('http://localhost/LoanDemo/public/')

register_btn = driver.find_element_by_id("register")
register_btn.click()
email = driver.find_element_by_id("email")
pw = driver.find_element_by_id("password")
email.clear()
pw.clear()
driver.save_screenshot('register_no_inp.jpg')
submit = driver.find_element_by_id("submit")
submit.click()
driver.implicitly_wait(10)
driver.save_screenshot('register_no_inp_error.jpg')
