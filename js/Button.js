var count = 0;
document.getElementById("myButton").onclick = function() {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    } else {
        var img = document.createElement("img")
        img.src = "https://d.7fon.org/%D0%B0%D1%81%D1%82%D1%80%D0%BE%D1%84%D0%BE%D1%82%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F_%D0%B7%D0%B2%D0%B5%D0%B7%D0%B4%D0%B0_%D0%B7%D0%B2%D0%B5%D0%B7%D0%B4%D1%8B.jpg?x1=0&y1=0&x2=728&y2=712&id=k711147435&width=2756&height=2696&hd=img";
        document.getElementById("demo").appendChild(img);
    }
} 