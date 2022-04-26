function validate() {
    let method1 = document.getElementById("7days");
    let method2 = document.getElementById("overnight");
    let method3 = document.getElementById("3days");

    if (!method1.checked && !method2.checked && !method3.checked) {
        alert("Please choose a shipping method.");
        return false;
    }
    return true;
}