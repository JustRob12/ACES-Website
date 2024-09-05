<!-- navbar.php -->
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="ACES.php">QR Code Generator</a></li>
        <li><a href="Officers.php">Officers</a></li>
    </ul>
</nav>

<style>
    /* Navbar styles to match index.php */
    nav {
        background-color: #fc6900;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
    }

    li {
        margin: 0 15px;
    }

    a {
        text-decoration: none;
        color: white;
        font-family: 'Poppins', sans-serif; /* Ensure the same font-family */
        font-size: 16px; /* Adjust size as needed */
        font-weight: 700; /* Match font-weight if needed */
    }

    a:hover {
        text-decoration: underline;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        nav ul {
            flex-direction: column;
            align-items: center;
        }

        li {
            margin: 10px 0;
        }
    }
</style>
