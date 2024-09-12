from time import sleep
sleep(10)
with open("python.log", "a") as f:
    f.write("Coucou lancé :)\n")
print("Content-type: text/html; charset=UTF-8", end="\r\n\r\n")

print("Hello world in python !", end="") # this should do more stuff as post requests are supported...
with open("python.log", "a") as f:
    f.write("Coucou fini :)\n")
