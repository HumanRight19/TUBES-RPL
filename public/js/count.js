const plus = document.querySelector(".plus");
const minus = document.querySelector(".minus");
const num = document.querySelector(".num");
let a = 1;
plus.addEventListener("click", () => {
    a++;
    num.innerText = a;
});
minus.addEventListener("click", () => {
    if (a > 1) {
        a--;
        num.innerText = a;
    }
});
