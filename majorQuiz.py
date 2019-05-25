from selenium import webdriver
from selenium.webdriver.common.keys import Keys

driver = webdriver.Firefox()
driver.get("https://google.com")
driver.save_screenshot("First.png")
#search for comelec
driver.find_element_by_name("q").send_keys("senatorial result rappler")
driver.find_element_by_name("q").send_keys(Keys.RETURN)
driver.save_screenshot("Second.png")
#inside google search
driver.implicitly_wait(100)
element1 = driver.find_element_by_class_name("r")
element2 = element1.find_element_by_tag_name("a").send_keys(Keys.RETURN)
driver.implicitly_wait(100)
#get Senator Names
driver.save_screenshot("Third.png")
element3 = driver.find_element_by_class_name("storypage-divider")
element4 = element3.find_element_by_tag_name("ol")
element5 = element4.find_elements_by_tag_name("li")
for i in element5:
    print(i.text)
driver.save_screenshot("Fourth.png")
