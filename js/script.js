function changeLanguage(lang) {
    const languageBtn = document.getElementById('languageBtn');
    const langMap = {
        'th': { img: 'img/Lang-th.png', text: 'ไทย' },
        'en': { img: 'img/Lang-en.png', text: 'English' }
    };

    if (langMap[lang]) {
        languageBtn.innerHTML = `<img class="fixlogo-lang" src="${langMap[lang].img}" alt="${langMap[lang].text}">
            ${langMap[lang].text}
        `;
    }
}
