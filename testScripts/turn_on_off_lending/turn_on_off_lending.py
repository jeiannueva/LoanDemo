from selenium import webdriver
from selenium.webdriver.common.keys import Keys

driver = webdriver.Firefox()
driver.get("http://127.0.0.1:8000/login")

# login
username.send_keys("hahaha@gmail.com")
password = driver.find_element_by_name("password")
password.clear()
password.send_keys("Wehttamachi123")
driver.save_screenshot("login.png")
password.send_keys(Keys.RETURN)

# go to lend money page
lendMoneyButton = driver.find_element_by_name("lendMoneyButton")
lendMoneyButton.click()
driver.save_screenshot("clickLendMoneyButton.png")

# click Turn on/off lending button
lendingStatus = driver.find_element_by_name("lendingStatus")
lendingStatus.click()
driver.save_screenshot("turnOnOffLending.png")
