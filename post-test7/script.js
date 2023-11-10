document.addEventListener("DOMContentLoaded", function() {
    const board = document.getElementById("board");
    const cells = document.querySelectorAll(".cell");
    const status = document.getElementById("status");
    const resetButton = document.getElementById("reset");
    const darkModeButton = document.getElementById("toggleDarkMode");

    let currentPlayer = "X";
    let gameBoard = ["", "", "", "", "", "", "", "", ""];

    const checkWinner = () => {
        const winningCombos = [
            [0, 1, 2],
            [3, 4, 5],
            [6, 7, 8],
            [0, 3, 6],
            [1, 4, 7],
            [2, 5, 8],
            [0, 4, 8],
            [2, 4, 6],
        ];

        for (const combo of winningCombos) {
            const [a, b, c] = combo;
            if (gameBoard[a] && gameBoard[a] === gameBoard[b] && gameBoard[a] === gameBoard[c]) {
                return gameBoard[a];
            }
        }
        return null;
    };

    const isBoardFull = () => {
        return gameBoard.every((cell) => cell !== "");
    };

    const handleCellClick = (index) => {
        if (gameBoard[index] === "" && !checkWinner() && !isBoardFull()) {
            gameBoard[index] = currentPlayer;
            cells[index].innerText = currentPlayer;
            const winner = checkWinner();

            if (winner) {
                status.innerText = `Player ${winner} menang!`;
            } else if (isBoardFull()) {
                status.innerText = "Seri!";
            } else {
                currentPlayer = currentPlayer === "X" ? "O" : "X";
                status.innerText = `Giliran Player ${currentPlayer}`;
            }
        }
    };

    cells.forEach((cell, index) => {
        cell.addEventListener("click", () => handleCellClick(index));
    });

    resetButton.addEventListener("click", () => {
        gameBoard = ["", "", "", "", "", "", "", "", ""];
        cells.forEach((cell) => (cell.innerText = ""));
        status.innerText = "Giliran Player X";
        currentPlayer = "X";
    });

    darkModeButton.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });
});