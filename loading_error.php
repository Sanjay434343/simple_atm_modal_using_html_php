<div class="error-animation">
    <svg class="xmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
        <circle class="xmark__circle" cx="26" cy="26" r="25" fill="none" />
        <path class="xmark__line" fill="none" d="M16 16 36 36 M36 16 16 36" />
    </svg>
</div>

<style>
    .error-animation { margin: 150px auto; }

    .xmark {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: block;
        stroke-width: 2;
        stroke: #ff0033; /* Change color to red for error */
        stroke-miterlimit: 10;
        box-shadow: inset 0px 0px 0px #ff0033; /* Change color to red for error */
        animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        position: relative;
        top: 5px;
        right: 5px;
        margin: 0 auto;
    }

    .xmark__circle {
        stroke-dasharray: 166;
        stroke-dashoffset: 166;
        stroke-width: 2;
        stroke-miterlimit: 10;
        stroke: #ff0033; /* Change color to red for error */
        fill: #fff;
        animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
    }

    .xmark__line {
        transform-origin: 50% 50%;
        stroke-dasharray: 48;
        stroke-dashoffset: 48;
        animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
    }

    @keyframes stroke {
        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes scale {
        0%, 100% {
            transform: none;
        }

        50% {
            transform: scale3d(1.1, 1.1, 1);
        }
    }

    @keyframes fill {
        100% {
            box-shadow: inset 0px 0px 0px 30px #ff0033; /* Change color to red for error */
        }
    }
</style>
