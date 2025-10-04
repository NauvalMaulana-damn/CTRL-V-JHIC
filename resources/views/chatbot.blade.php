<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Sekolah - SMK PGRI 3 Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <div class="bg-white w-full max-w-lg rounded-xl shadow-lg p-6">
        <h1 class="text-2xl font-bold text-center mb-4">🤖 Chatbot Sekolah SMK PGRI 3 Malang</h1>

        <div id="chatbox" class="h-80 overflow-y-auto border rounded-lg p-3 mb-4 bg-gray-50"></div>

        <form id="chatForm" class="flex">
            <input type="text" id="message" name="message" placeholder="Tulis pertanyaan kamu..."
                class="flex-grow border rounded-l-lg px-3 py-2 focus:outline-none" required />
            <button type="submit" class="bg-blue-500 text-white px-4 rounded-r-lg hover:bg-blue-600 transition">
                Kirim
            </button>
        </form>
    </div>

    <script>
    const chatForm = document.getElementById('chatForm');
    const chatbox = document.getElementById('chatbox');
    const messageInput = document.getElementById('message');

    chatForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const message = messageInput.value.trim();
        if (!message) return;

        appendMessage('🧑 Kamu', message);
        messageInput.value = '';

        appendMessage('🤖 Bot', 'Mengetik...');

        const res = await fetch("{{ route('chat.ask') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                message
            })
        });

        const data = await res.json();
        chatbox.lastElementChild.remove(); // hapus "Mengetik..."
        appendMessage('🤖 Bot', data.reply);
    });

    function appendMessage(sender, text) {
        const div = document.createElement('div');
        div.classList.add('mb-3');
        div.innerHTML = `<strong>${sender}:</strong> <span>${text}</span>`;
        chatbox.appendChild(div);
        chatbox.scrollTop = chatbox.scrollHeight;
    }
    </script>
</body>

</html>
