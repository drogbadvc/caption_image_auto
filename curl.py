import http.client

conn = http.client.HTTPSConnection("www.machinools.com")

payload = ""

headers = { 'Content-Type': "application/json" }

conn.request("POST", "/api/img/img2text?specified_tags=&image_url=https%3A%2F%2Fmedia3.debuyer.com%2Fimg%2Fcms%2FBlog%2FpiledecrepeBox5615-01-min.jpg", payload, headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))
