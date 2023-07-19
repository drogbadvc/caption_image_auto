const data = JSON.stringify(false);

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "https://www.machinools.com/api/img/img2text?specified_tags=&image_url=https%3A%2F%2Fmedia3.debuyer.com%2Fimg%2Fcms%2FBlog%2FpiledecrepeBox5615-01-min.jpg");
xhr.setRequestHeader("Content-Type", "application/json");

xhr.send(data);
