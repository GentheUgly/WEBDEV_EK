let displayValue = '';
let currentOperation = null;
let firstOperand = null;

function appendNumber(number) {
    displayValue += number;
    updateDisplay();
}

function chooseOperation(operation) {
    if (displayValue === '') return;
    if (firstOperand === null) {
        firstOperand = parseFloat(displayValue);
    } else {
        calculate();
    }
    currentOperation = operation;
    displayValue = '';
}

function calculate() {
    if (currentOperation === null || displayValue === '') return;
    const secondOperand = parseFloat(displayValue);
    switch (currentOperation) {
        case '+':
            firstOperand += secondOperand;
            break;
        case '-':
            firstOperand -= secondOperand;
            break;
        case '*':
            firstOperand *= secondOperand;
            break;
        case '/':
            firstOperand /= secondOperand;
            break;
    }
    displayValue = firstOperand.toString();
    currentOperation = null;
    updateDisplay();
}

function clearDisplay() {
    displayValue = '';
    firstOperand = null;
    currentOperation = null;
    updateDisplay();
}

function updateDisplay() {
    document.getElementById('display').value = displayValue;
}