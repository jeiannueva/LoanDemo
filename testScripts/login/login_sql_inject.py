# CREATED BY: FRANCIS GARCIA

from selenium import webdriver
from selenium.webdriver.common.keys import Keys

driver = webdriver.Chrome()
driver.get('http://localhost/LoanDemo/public')

login_btn = driver.find_element_by_id('login')
login_btn.click()

email = driver.find_element_by_id("email")
pw = driver.find_element_by_id("password")
sql_injection = 'dummy@email.com\'" OR true\''
#remember = driver.find_element_by_id("remember")

email.clear()
pw.clear()

email.send_keys(sql_injection)
pw.send_keys('12345678')
driver.save_screenshot('login_sql_fill.jpg')

email.send_keys(Keys.RETURN)
driver.implicitly_wait(100)
driver.save_screenshot('login_sql_sub.jpg')
