function copyToClipboard(elementId, btn) {
    const codeBlock = document.getElementById(elementId);
    const text = codeBlock.innerText;
    navigator.clipboard.writeText(text).then(() => {
        const originalText = btn.innerText;
        btn.innerText = "Copied!";
        setTimeout(() => btn.innerText = originalText, 2000);
    });
}