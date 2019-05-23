from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome()
driver.get("http://127.0.0.1:8000/login")

# login
username = driver.find_element_by_name("email")
username.clear()
username.send_keys("qq@qq")
password = driver.find_element_by_name("password")
password.clear()
password.send_keys("qwerqwer")
driver.save_screenshot("login.png")
password.send_keys(Keys.RETURN)

# click add balance button
addBalanceButton = driver.find_element_by_name("addBalanceButton")
addBalanceButton.click()

#wait for form to pop-up
time.sleep(3)
driver.save_screenshot("clickAddBalanceButton.png")

# input values in the form (User submitted an incorrect format)
amount = driver.find_element_by_name("amount")
#amount.send_keys("abc123")
amount.send_keys("-1000")

card_number = driver.find_element_by_name("card_number")
card_number.send_keys("5210 5210 5210 5210")

exp_date = driver.find_element_by_name("exp_date")
exp_date.send_keys("5/22")

cvv = driver.find_element_by_name("cvv")
cvv.send_keys("911")
driver.save_screenshot("InputInvalidAmount.png")

addBalanceSubmitButton = driver.find_element_by_name("addBalanceSubmitButton")
addBalanceSubmitButton.click()
driver.save_screenshot("result.png")
