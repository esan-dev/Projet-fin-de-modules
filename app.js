/* var form = new FormData(document.querySelector("form"));
const result = (url) => {
    fetch(url, {
        method: "POST",
        body: JSON.stringify({
            form
        }),
        headers: {
            headers: {
                "Content-Type": "application/json"
            },
        }
    }).then((response) => {
        console.log(response.json())
    }).catch((e) => {
        console.log(e)
    })
}

const btn = document.querySelector("button");


btn.addEventListener("click", (e) => {
    e.preventDefault()
    result('calculator.php')
}) */