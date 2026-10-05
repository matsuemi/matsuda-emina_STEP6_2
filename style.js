function confirmSubmit() {

    var table = document.getElementById('table');

    var tableContent = "";
    var name = document.getElementById('name').value;
    var companyName = document.getElementById('companyName').value;
    var email = document.getElementById('email').value;
    var age = document.getElementById('age').value;
    var message = document.getElementById('message').value;

    tableContent += 'お名前 -> ' + name + '\n';
    tableContent += '会社名 -> ' + companyName + '\n';
    tableContent += 'メールアドレス -> ' + email + '\n';
    tableContent += '年齢 -> ' + age + '\n';
    tableContent += 'お問い合わせ内容 -> ' + message + '\n';

    if (!name || !companyName || !email || !age || !message) {
        alert("全て入力必須項目になります。");
        return false;
    }

    return confirm("本当に送信しますか？\n\n" + tableContent);;
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