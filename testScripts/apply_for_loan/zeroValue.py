from selenium import webdriver
from selenium.webdriver.common.keys import Keys

driver = webdriver.Firefox()
driver.get("http://127.0.0.1:8000/loans/add")

# login
username = driver.find_element_by_id("email")
username.clear()
username.send_keys("jmalviz123@gmail.com")
password = driver.find_element_by_id("password")
password.clear()
password.send_keys("Wehttamachi123")
password.send_keys(Keys.RETURN)
driver.implicitly_wait(50)
# input shouldn't be zero or negative
driver.find_element_by_id("amount").clear()
#Input zero value
driver.find_element_by_id("amount").send_keys("0")
driver.find_element_by_class_name("push").send_keys(Keys.RETURN)
driver.implicitly_wait(30)
driver.save_screenshot("invalidValueZero.png")
