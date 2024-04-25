var count = 0;
document.getElementById("myButton").onclick = function() {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    } else {
        var img = document.createElement("img")
        img.src = "https://watcher.guru/news/wp-content/uploads/2024/03/e9d70dde-800x457.jpg";
        document.getElementById("demo").appendChild(img);
    }
} 