from selenium import webdriver
from selenium.webdriver.common.keys import Keys

driver = webdriver.Chrome()
driver.get('http://localhost/LoanDemo/public')

login_btn = driver.find_element_by_id('login')
login_btn.click()

email = driver.find_element_by_id("email")
pw = driver.find_element_by_id("password")

email.clear()
pw.clear()

email.send_keys('invalid invalid invalid invalid')
pw.send_keys('12345678')

email.send_keys(Keys.RETURN)
driver.implicitly_wait(100)
driver.save_screenshot('login_invalid_email.jpg')
