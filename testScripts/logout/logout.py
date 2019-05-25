from selenium import webdriver
from selenium.webdriver.common.keys import Keys

#####################################################
#               
#              Script by Elijah Reyes
#
#####################################################

driver = webdriver.Chrome()
driver.get('http://localhost:8081/LoanDemo/public/login')


# login
username = driver.find_element_by_id("email")
username.clear()
username.send_keys("fake.email1@fakeemail.com")
password = driver.find_element_by_id("password")
password.clear()
password.send_keys("fakepass")

driver.save_screenshot("login.png")


password.send_keys(Keys.RETURN)




driver.find_element_by_id('navbarDropdown').click()

driver.save_screenshot("logout.png")


dropdown = driver.find_elements_by_class_name('dropdown-item')
dropdown[1].click()

driver.save_screenshot("logged-out.png")