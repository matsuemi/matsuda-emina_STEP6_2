function confirmSubmit() {
    var name = document.getElementById("name").value;
    var companyName = document.getElementById("companyName").value;
    var email = document.getElementById("email").value;
    var age = document.getElementById("age").value;
    var message = document.getElementById("message").value;

    var tableContent = "";

    tableContent += 'お名前 -> ' + name + '\n';
    tableContent += '会社名 -> ' + companyName + '\n';
    tableContent += 'メールアドレス -> ' + email + '\n';
    tableContent += '年齢 -> ' + age + '\n';
    tableContent += 'お問い合わせ内容 -> ' + message + '\n';

    if (!name || !companyName || !email || !age || !message) {
        alert("必須項目が未入力です。入力内容をご確認ください。");
    } else {
        return confirm("本当に送信しますか？\n\n" + tableContent);
    }
    
    return true;
}

document.addEventListener('DOMContentLoaded', function() {
    var button = document.querySelector('input[type=button]');
    var block = document.getElementById("footer");
    var colors = ['blue', 'red', 'yellow' , 'gray'];
    var currentIndex = 0;

    button.addEventListener('click', function() {
        block.style.backgroundColor = colors[currentIndex];
        currentIndex = (currentIndex + 1) % colors.length;
    });
});