const form = document.getElementById('chatForm');
const chatBox = document.getElementById('chatBox');
const btn= document.getElementById('btn');

const userInput = document.getElementById('userInput')

if(userInput.value===''){
    btn.disabled = true; 
}
    
userInput.addEventListener('input', () => {
    if (userInput.value.trim() === '') {
        btn.disabled = true; // Disable the button
    } else {
        btn.disabled = false; // Enable the button
    }
});


form.addEventListener('submit', async function(e) {
    e.preventDefault();
    const userInput = document.getElementById('userInput').value;
    chatBox.innerHTML += ` <div class="sender" >  <div class="sending">${userInput}</div> </div>`;
    document.getElementById('userInput').value = '';

    const response = await fetch('chat_process.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `userInput=${encodeURIComponent(userInput)}`
    });

    const botReply = await response.text();
    chatBox.innerHTML += ` <div class="receiver">  <div class="receiving" >${botReply} </div></div> `;
    chatBox.scrollTop = chatBox.scrollHeight;
});



{/* <img src="images\rb_3527 1.png" alt="">  */}