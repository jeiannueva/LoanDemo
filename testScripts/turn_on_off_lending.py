from selenium import webdriver
from selenium.webdriver.common.keys import Keys

driver = webdriver.Chrome()
driver.get("http://127.0.0.1:8000/login")

# login
username = driver.find_element_by_name("email")
username.clear()
username.send_keys("qq@qq")
password = driver.find_element_by_name("password")
password.clear()
password.send_keys("qwerqwer")
password.send_keys(Keys.RETURN)

# go to lend money page
lendMoneyButton = driver.find_element_by_name("lendMoneyButton")
lendMoneyButton.click()

# click Turn on/off lending button
lendingStatus = driver.find_element_by_name("lendingStatus")
lendingStatus.click()
