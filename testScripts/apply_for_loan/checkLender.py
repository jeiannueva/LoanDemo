from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Firefox()
driver.get("http://127.0.0.1:8000/login")

# login
username = driver.find_element_by_id("email")
username.clear()
username.send_keys("hahaha@gmail.com")
password = driver.find_element_by_id("password")
password.clear()
password.send_keys("Wehttamachi123")
password.send_keys(Keys.RETURN)
time.sleep(10)
driver.save_screenshot("loanRequestAtLenderDashboard.png")
