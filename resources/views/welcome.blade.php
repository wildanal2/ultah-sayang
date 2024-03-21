<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Happy birthday sayangku citaku cantikku</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css','resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <link href="{{ asset('assets/sec2.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/sec2-love.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/sec3.css') }}" rel="stylesheet"> -->
    <style>
        *,
        *::after,
        *::before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        :root {
            --dark-color: #000;
        }

        .bodysect2 {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            min-height: 100vh;
            background-color: var(--dark-color);
            overflow: hidden;
            perspective: 1000px;
        }

        .night {
            position: fixed;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            width: 100%;
            height: 100%;
            filter: blur(0.1vmin);
            background-image: radial-gradient(ellipse at top, transparent 0%, var(--dark-color)), radial-gradient(ellipse at bottom, var(--dark-color), rgba(145, 233, 255, 0.2)), repeating-linear-gradient(220deg, black 0px, black 19px, transparent 19px, transparent 22px), repeating-linear-gradient(189deg, black 0px, black 19px, transparent 19px, transparent 22px), repeating-linear-gradient(148deg, black 0px, black 19px, transparent 19px, transparent 22px), linear-gradient(90deg, #00fffa, #f0f0f0);
        }

        .flowers {
            position: relative;
            transform: scale(0.9);
        }

        .flower {
            position: absolute;
            bottom: 10vmin;
            transform-origin: bottom center;
            z-index: 10;
            --fl-speed: 0.8s;
        }

        .flower--1 {
            animation: moving-flower-1 4s linear infinite;
        }

        .flower--1 .flower__line {
            height: 70vmin;
            animation-delay: 0.3s;
        }

        .flower--1 .flower__line__leaf--1 {
            animation: blooming-leaf-right var(--fl-speed) 1.6s backwards;
        }

        .flower--1 .flower__line__leaf--2 {
            animation: blooming-leaf-right var(--fl-speed) 1.4s backwards;
        }

        .flower--1 .flower__line__leaf--3 {
            animation: blooming-leaf-left var(--fl-speed) 1.2s backwards;
        }

        .flower--1 .flower__line__leaf--4 {
            animation: blooming-leaf-left var(--fl-speed) 1s backwards;
        }

        .flower--1 .flower__line__leaf--5 {
            animation: blooming-leaf-right var(--fl-speed) 1.8s backwards;
        }

        .flower--1 .flower__line__leaf--6 {
            animation: blooming-leaf-left var(--fl-speed) 2s backwards;
        }

        .flower--2 {
            left: 50%;
            transform: rotate(20deg);
            animation: moving-flower-2 4s linear infinite;
        }

        .flower--2 .flower__line {
            height: 60vmin;
            animation-delay: 0.6s;
        }

        .flower--2 .flower__line__leaf--1 {
            animation: blooming-leaf-right var(--fl-speed) 1.9s backwards;
        }

        .flower--2 .flower__line__leaf--2 {
            animation: blooming-leaf-right var(--fl-speed) 1.7s backwards;
        }

        .flower--2 .flower__line__leaf--3 {
            animation: blooming-leaf-left var(--fl-speed) 1.5s backwards;
        }

        .flower--2 .flower__line__leaf--4 {
            animation: blooming-leaf-left var(--fl-speed) 1.3s backwards;
        }

        .flower--3 {
            left: 50%;
            transform: rotate(-15deg);
            animation: moving-flower-3 4s linear infinite;
        }

        .flower--3 .flower__line {
            animation-delay: 0.9s;
        }

        .flower--3 .flower__line__leaf--1 {
            animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
        }

        .flower--3 .flower__line__leaf--2 {
            animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
        }

        .flower--3 .flower__line__leaf--3 {
            animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
        }

        .flower--3 .flower__line__leaf--4 {
            animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
        }

        .flower__leafs {
            position: relative;
            animation: blooming-flower 2s backwards;
        }

        .flower__leafs--1 {
            animation-delay: 1.1s;
        }

        .flower__leafs--2 {
            animation-delay: 1.4s;
        }

        .flower__leafs--3 {
            animation-delay: 1.7s;
        }

        .flower__leafs::after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            transform: translate(-50%, -100%);
            width: 8vmin;
            height: 8vmin;
            background-color: #6bf0ff;
            filter: blur(10vmin);
        }

        .flower__leaf {
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 8vmin;
            height: 11vmin;
            border-radius: 51% 49% 47% 53%/44% 45% 55% 69%;
            background-color: #a7ffee;
            background-image: linear-gradient(to top, #54b8aa, #a7ffee);
            transform-origin: bottom center;
            opacity: 0.9;
            box-shadow: inset 0 0 2vmin rgba(255, 255, 255, 0.5);
        }

        .flower__leaf--1 {
            transform: translate(-10%, 1%) rotateY(40deg) rotateX(-50deg);
        }

        .flower__leaf--2 {
            transform: translate(-50%, -4%) rotateX(40deg);
        }

        .flower__leaf--3 {
            transform: translate(-90%, 0%) rotateY(45deg) rotateX(50deg);
        }

        .flower__leaf--4 {
            width: 8vmin;
            height: 8vmin;
            transform-origin: bottom left;
            border-radius: 4vmin 10vmin 4vmin 4vmin;
            transform: translate(0%, 18%) rotateX(70deg) rotate(-43deg);
            background-image: linear-gradient(to top, #39c6d6, #a7ffee);
            z-index: 1;
            opacity: 0.8;
        }

        .flower__white-circle {
            position: absolute;
            left: -3.5vmin;
            top: -3vmin;
            width: 9vmin;
            height: 4vmin;
            border-radius: 50%;
            background-color: #fff;
        }

        .flower__white-circle::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 45%;
            transform: translate(-50%, -50%);
            width: 60%;
            height: 60%;
            border-radius: inherit;
            background-image: repeating-linear-gradient(135deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(45deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(67.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(135deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(45deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(112.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(112.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(45deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(22.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(45deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(22.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(135deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(157.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(67.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(67.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), linear-gradient(90deg, #ffeb12, #ffce00);
        }

        .flower__line {
            height: 55vmin;
            width: 1.5vmin;
            background-image: linear-gradient(to left, rgba(0, 0, 0, 0.2), transparent, rgba(255, 255, 255, 0.2)), linear-gradient(to top, transparent 10%, #14757a, #39c6d6);
            box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.5);
            animation: grow-flower-tree 4s backwards;
        }

        .flower__line__leaf {
            --w: 7vmin;
            --h: calc(var(--w) + 2vmin);
            position: absolute;
            top: 20%;
            left: 90%;
            width: var(--w);
            height: var(--h);
            border-top-right-radius: var(--h);
            border-bottom-left-radius: var(--h);
            background-image: linear-gradient(to top, rgba(20, 117, 122, 0.4), #39c6d6);
        }

        .flower__line__leaf--1 {
            transform: rotate(70deg) rotateY(30deg);
        }

        .flower__line__leaf--2 {
            top: 45%;
            transform: rotate(70deg) rotateY(30deg);
        }

        .flower__line__leaf--3,
        .flower__line__leaf--4,
        .flower__line__leaf--6 {
            border-top-right-radius: 0;
            border-bottom-left-radius: 0;
            border-top-left-radius: var(--h);
            border-bottom-right-radius: var(--h);
            left: -460%;
            top: 12%;
            transform: rotate(-70deg) rotateY(30deg);
        }

        .flower__line__leaf--4 {
            top: 40%;
        }

        .flower__line__leaf--5 {
            top: 0;
            transform-origin: left;
            transform: rotate(70deg) rotateY(30deg) scale(0.6);
        }

        .flower__line__leaf--6 {
            top: -2%;
            left: -450%;
            transform-origin: right;
            transform: rotate(-70deg) rotateY(30deg) scale(0.6);
        }

        .flower__light {
            position: absolute;
            bottom: 0vmin;
            width: 1vmin;
            height: 1vmin;
            background-color: #fffb00;
            border-radius: 50%;
            filter: blur(0.2vmin);
            animation: light-ans 4s linear infinite backwards;
        }

        .flower__light:nth-child(odd) {
            background-color: #23f0ff;
        }

        .flower__light--1 {
            left: -2vmin;
            animation-delay: 1s;
        }

        .flower__light--2 {
            left: 3vmin;
            animation-delay: 0.5s;
        }

        .flower__light--3 {
            left: -6vmin;
            animation-delay: 0.3s;
        }

        .flower__light--4 {
            left: 6vmin;
            animation-delay: 0.9s;
        }

        .flower__light--5 {
            left: -1vmin;
            animation-delay: 1.5s;
        }

        .flower__light--6 {
            left: -4vmin;
            animation-delay: 3s;
        }

        .flower__light--7 {
            left: 3vmin;
            animation-delay: 2s;
        }

        .flower__light--8 {
            left: -6vmin;
            animation-delay: 3.5s;
        }

        .flower__grass {
            --c: #159faa;
            --line-w: 1.5vmin;
            position: absolute;
            bottom: 12vmin;
            left: -7vmin;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            z-index: 20;
            transform-origin: bottom center;
            transform: rotate(-48deg) rotateY(40deg);
        }

        .flower__grass--1 {
            animation: moving-grass 2s linear infinite;
        }

        .flower__grass--2 {
            left: 2vmin;
            bottom: 10vmin;
            transform: scale(0.5) rotate(75deg) rotateX(10deg) rotateY(-200deg);
            opacity: 0.8;
            z-index: 0;
            animation: moving-grass--2 1.5s linear infinite;
        }

        .flower__grass--top {
            width: 7vmin;
            height: 10vmin;
            border-top-right-radius: 100%;
            border-right: var(--line-w) solid var(--c);
            transform-origin: bottom center;
            transform: rotate(-2deg);
        }

        .flower__grass--bottom {
            margin-top: -2px;
            width: var(--line-w);
            height: 25vmin;
            background-image: linear-gradient(to top, transparent, var(--c));
        }

        .flower__grass__leaf {
            --size: 10vmin;
            position: absolute;
            width: calc(var(--size) * 2.1);
            height: var(--size);
            border-top-left-radius: var(--size);
            border-top-right-radius: var(--size);
            background-image: linear-gradient(to top, transparent, transparent 30%, var(--c));
            z-index: 100;
        }

        .flower__grass__leaf--1 {
            top: -6%;
            left: 30%;
            --size: 6vmin;
            transform: rotate(-20deg);
            animation: growing-grass-ans--1 2s 2.6s backwards;
        }

        @keyframes growing-grass-ans--1 {
            0% {
                transform-origin: bottom left;
                transform: rotate(-20deg) scale(0);
            }
        }

        .flower__grass__leaf--2 {
            top: -5%;
            left: -110%;
            --size: 6vmin;
            transform: rotate(10deg);
            animation: growing-grass-ans--2 2s 2.4s linear backwards;
        }

        @keyframes growing-grass-ans--2 {
            0% {
                transform-origin: bottom right;
                transform: rotate(10deg) scale(0);
            }
        }

        .flower__grass__leaf--3 {
            top: 5%;
            left: 60%;
            --size: 8vmin;
            transform: rotate(-18deg) rotateX(-20deg);
            animation: growing-grass-ans--3 2s 2.2s linear backwards;
        }

        @keyframes growing-grass-ans--3 {
            0% {
                transform-origin: bottom left;
                transform: rotate(-18deg) rotateX(-20deg) scale(0);
            }
        }

        .flower__grass__leaf--4 {
            top: 6%;
            left: -135%;
            --size: 8vmin;
            transform: rotate(2deg);
            animation: growing-grass-ans--4 2s 2s linear backwards;
        }

        @keyframes growing-grass-ans--4 {
            0% {
                transform-origin: bottom right;
                transform: rotate(2deg) scale(0);
            }
        }

        .flower__grass__leaf--5 {
            top: 20%;
            left: 60%;
            --size: 10vmin;
            transform: rotate(-24deg) rotateX(-20deg);
            animation: growing-grass-ans--5 2s 1.8s linear backwards;
        }

        @keyframes growing-grass-ans--5 {
            0% {
                transform-origin: bottom left;
                transform: rotate(-24deg) rotateX(-20deg) scale(0);
            }
        }

        .flower__grass__leaf--6 {
            top: 22%;
            left: -180%;
            --size: 10vmin;
            transform: rotate(10deg);
            animation: growing-grass-ans--6 2s 1.6s linear backwards;
        }

        @keyframes growing-grass-ans--6 {
            0% {
                transform-origin: bottom right;
                transform: rotate(10deg) scale(0);
            }
        }

        .flower__grass__leaf--7 {
            top: 39%;
            left: 70%;
            --size: 10vmin;
            transform: rotate(-10deg);
            animation: growing-grass-ans--7 2s 1.4s linear backwards;
        }

        @keyframes growing-grass-ans--7 {
            0% {
                transform-origin: bottom left;
                transform: rotate(-10deg) scale(0);
            }
        }

        .flower__grass__leaf--8 {
            top: 40%;
            left: -215%;
            --size: 11vmin;
            transform: rotate(10deg);
            animation: growing-grass-ans--8 2s 1.2s linear backwards;
        }

        @keyframes growing-grass-ans--8 {
            0% {
                transform-origin: bottom right;
                transform: rotate(10deg) scale(0);
            }
        }

        .flower__grass__overlay {
            position: absolute;
            top: -10%;
            right: 0%;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            filter: blur(1.5vmin);
            z-index: 100;
        }

        .flower__g-long {
            --w: 2vmin;
            --h: 6vmin;
            --c: #159faa;
            position: absolute;
            bottom: 10vmin;
            left: -3vmin;
            transform-origin: bottom center;
            transform: rotate(-30deg) rotateY(-20deg);
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            animation: flower-g-long-ans 3s linear infinite;
        }

        @keyframes flower-g-long-ans {

            0%,
            100% {
                transform: rotate(-30deg) rotateY(-20deg);
            }

            50% {
                transform: rotate(-32deg) rotateY(-20deg);
            }
        }

        .flower__g-long__top {
            top: calc(var(--h) * -1);
            width: calc(var(--w) + 1vmin);
            height: var(--h);
            border-top-right-radius: 100%;
            border-right: 0.7vmin solid var(--c);
            transform: translate(-0.7vmin, 1vmin);
        }

        .flower__g-long__bottom {
            width: var(--w);
            height: 50vmin;
            transform-origin: bottom center;
            background-image: linear-gradient(to top, transparent 30%, var(--c));
            box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.5);
            clip-path: polygon(35% 0, 65% 1%, 100% 100%, 0% 100%);
        }

        .flower__g-right {
            position: absolute;
            bottom: 6vmin;
            left: -2vmin;
            transform-origin: bottom left;
            transform: rotate(20deg);
        }

        .flower__g-right .leaf {
            width: 30vmin;
            height: 50vmin;
            border-top-left-radius: 100%;
            border-left: 2vmin solid #079097;
            background-image: linear-gradient(to bottom, transparent, var(--dark-color) 60%);
            -webkit-mask-image: linear-gradient(to top, transparent 30%, #079097 60%);
        }

        .flower__g-right--1 {
            animation: flower-g-right-ans 2.5s linear infinite;
        }

        .flower__g-right--2 {
            left: 5vmin;
            transform: rotateY(-180deg);
            animation: flower-g-right-ans--2 3s linear infinite;
        }

        .flower__g-right--2 .leaf {
            height: 75vmin;
            filter: blur(0.3vmin);
            opacity: 0.8;
        }

        @keyframes flower-g-right-ans {

            0%,
            100% {
                transform: rotate(20deg);
            }

            50% {
                transform: rotate(24deg) rotateX(-20deg);
            }
        }

        @keyframes flower-g-right-ans--2 {

            0%,
            100% {
                transform: rotateY(-180deg) rotate(0deg) rotateX(-20deg);
            }

            50% {
                transform: rotateY(-180deg) rotate(6deg) rotateX(-20deg);
            }
        }

        .flower__g-front {
            position: absolute;
            bottom: 6vmin;
            left: 2.5vmin;
            z-index: 100;
            transform-origin: bottom center;
            transform: rotate(-28deg) rotateY(30deg) scale(1.04);
            animation: flower__g-front-ans 2s linear infinite;
        }

        @keyframes flower__g-front-ans {

            0%,
            100% {
                transform: rotate(-28deg) rotateY(30deg) scale(1.04);
            }

            50% {
                transform: rotate(-35deg) rotateY(40deg) scale(1.04);
            }
        }

        .flower__g-front__line {
            width: 0.3vmin;
            height: 20vmin;
            background-image: linear-gradient(to top, transparent, #079097, transparent 100%);
            position: relative;
        }

        .flower__g-front__leaf-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            transform-origin: bottom left;
            transform: rotate(10deg);
        }

        .flower__g-front__leaf-wrapper:nth-child(even) {
            left: 0vmin;
            transform: rotateY(-180deg) rotate(5deg);
            animation: flower__g-front__leaf-left-ans 1s ease-in backwards;
        }

        .flower__g-front__leaf-wrapper:nth-child(odd) {
            animation: flower__g-front__leaf-ans 1s ease-in backwards;
        }

        .flower__g-front__leaf-wrapper--1 {
            top: -8vmin;
            transform: scale(0.7);
            animation: flower__g-front__leaf-ans 1s 5.5s ease-in backwards !important;
        }

        .flower__g-front__leaf-wrapper--2 {
            top: -8vmin;
            transform: rotateY(-180deg) scale(0.7) !important;
            animation: flower__g-front__leaf-left-ans-2 1s 4.6s ease-in backwards !important;
        }

        .flower__g-front__leaf-wrapper--3 {
            top: -3vmin;
            animation: flower__g-front__leaf-ans 1s 4.6s ease-in backwards;
        }

        .flower__g-front__leaf-wrapper--4 {
            top: -3vmin;
            transform: rotateY(-180deg) scale(0.9) !important;
            animation: flower__g-front__leaf-left-ans-2 1s 4.6s ease-in backwards !important;
        }

        @keyframes flower__g-front__leaf-left-ans-2 {
            0% {
                transform: rotateY(-180deg) scale(0);
            }
        }

        .flower__g-front__leaf-wrapper--5,
        .flower__g-front__leaf-wrapper--6 {
            top: 2vmin;
        }

        .flower__g-front__leaf-wrapper--7,
        .flower__g-front__leaf-wrapper--8 {
            top: 6.5vmin;
        }

        .flower__g-front__leaf-wrapper--2 {
            animation-delay: 5.2s !important;
        }

        .flower__g-front__leaf-wrapper--3 {
            animation-delay: 4.9s !important;
        }

        .flower__g-front__leaf-wrapper--5 {
            animation-delay: 4.3s !important;
        }

        .flower__g-front__leaf-wrapper--6 {
            animation-delay: 4.1s !important;
        }

        .flower__g-front__leaf-wrapper--7 {
            animation-delay: 3.8s !important;
        }

        .flower__g-front__leaf-wrapper--8 {
            animation-delay: 3.5s !important;
        }

        @keyframes flower__g-front__leaf-ans {
            0% {
                transform: rotate(10deg) scale(0);
            }
        }

        @keyframes flower__g-front__leaf-left-ans {
            0% {
                transform: rotateY(-180deg) rotate(5deg) scale(0);
            }
        }

        .flower__g-front__leaf {
            width: 10vmin;
            height: 10vmin;
            border-radius: 100% 0% 0% 100%/100% 100% 0% 0%;
            box-shadow: inset 0 2px 1vmin rgba(44, 238, 252, 0.2);
            background-image: linear-gradient(to bottom left, transparent, var(--dark-color)), linear-gradient(to bottom right, #159faa 50%, transparent 50%, transparent);
            -webkit-mask-image: linear-gradient(to bottom right, #159faa 50%, transparent 50%, transparent);
            mask-image: linear-gradient(to bottom right, #159faa 50%, transparent 50%, transparent);
        }

        .flower__g-fr {
            position: absolute;
            bottom: -4vmin;
            left: vmin;
            transform-origin: bottom left;
            z-index: 10;
            animation: flower__g-fr-ans 2s linear infinite;
        }

        @keyframes flower__g-fr-ans {

            0%,
            100% {
                transform: rotate(2deg);
            }

            50% {
                transform: rotate(4deg);
            }
        }

        .flower__g-fr .leaf {
            width: 30vmin;
            height: 50vmin;
            border-top-left-radius: 100%;
            border-left: 2vmin solid #079097;
            -webkit-mask-image: linear-gradient(to top, transparent 25%, #079097 50%);
            position: relative;
            z-index: 1;
        }

        .flower__g-fr__leaf {
            position: absolute;
            top: 0;
            left: 0;
            width: 10vmin;
            height: 10vmin;
            border-radius: 100% 0% 0% 100%/100% 100% 0% 0%;
            box-shadow: inset 0 2px 1vmin rgba(44, 238, 252, 0.2);
            background-image: linear-gradient(to bottom left, transparent, var(--dark-color) 98%), linear-gradient(to bottom right, #23f0ff 45%, transparent 50%, transparent);
            -webkit-mask-image: linear-gradient(135deg, #159faa 40%, transparent 50%, transparent);
        }

        .flower__g-fr__leaf--1 {
            left: 20vmin;
            transform: rotate(45deg);
            animation: flower__g-fr-leaft-ans-1 0.5s 5.2s linear backwards;
        }

        @keyframes flower__g-fr-leaft-ans-1 {
            0% {
                transform-origin: left;
                transform: rotate(45deg) scale(0);
            }
        }

        .flower__g-fr__leaf--2 {
            left: 12vmin;
            top: -7vmin;
            transform: rotate(25deg) rotateY(-180deg);
            animation: flower__g-fr-leaft-ans-6 0.5s 5s linear backwards;
        }

        .flower__g-fr__leaf--3 {
            left: 15vmin;
            top: 6vmin;
            transform: rotate(55deg);
            animation: flower__g-fr-leaft-ans-5 0.5s 4.8s linear backwards;
        }

        .flower__g-fr__leaf--4 {
            left: 6vmin;
            top: -2vmin;
            transform: rotate(25deg) rotateY(-180deg);
            animation: flower__g-fr-leaft-ans-6 0.5s 4.6s linear backwards;
        }

        .flower__g-fr__leaf--5 {
            left: 10vmin;
            top: 14vmin;
            transform: rotate(55deg);
            animation: flower__g-fr-leaft-ans-5 0.5s 4.4s linear backwards;
        }

        @keyframes flower__g-fr-leaft-ans-5 {
            0% {
                transform-origin: left;
                transform: rotate(55deg) scale(0);
            }
        }

        .flower__g-fr__leaf--6 {
            left: 0vmin;
            top: 6vmin;
            transform: rotate(25deg) rotateY(-180deg);
            animation: flower__g-fr-leaft-ans-6 0.5s 4.2s linear backwards;
        }

        @keyframes flower__g-fr-leaft-ans-6 {
            0% {
                transform-origin: right;
                transform: rotate(25deg) rotateY(-180deg) scale(0);
            }
        }

        .flower__g-fr__leaf--7 {
            left: 5vmin;
            top: 22vmin;
            transform: rotate(45deg);
            animation: flower__g-fr-leaft-ans-7 0.5s 4s linear backwards;
        }

        @keyframes flower__g-fr-leaft-ans-7 {
            0% {
                transform-origin: left;
                transform: rotate(45deg) scale(0);
            }
        }

        .flower__g-fr__leaf--8 {
            left: -4vmin;
            top: 15vmin;
            transform: rotate(15deg) rotateY(-180deg);
            animation: flower__g-fr-leaft-ans-8 0.5s 3.8s linear backwards;
        }

        @keyframes flower__g-fr-leaft-ans-8 {
            0% {
                transform-origin: right;
                transform: rotate(15deg) rotateY(-180deg) scale(0);
            }
        }

        .long-g {
            position: absolute;
            bottom: 25vmin;
            left: -42vmin;
            transform-origin: bottom left;
        }

        .long-g--1 {
            bottom: 0vmin;
            transform: scale(0.8) rotate(-5deg);
        }

        .long-g--1 .leaf {
            -webkit-mask-image: linear-gradient(to top, transparent 40%, #079097 80%) !important;
        }

        .long-g--1 .leaf--1 {
            --w: 5vmin;
            --h: 60vmin;
            left: -2vmin;
            transform: rotate(3deg) rotateY(-180deg);
        }

        .long-g--2,
        .long-g--3 {
            bottom: -3vmin;
            left: -35vmin;
            transform-origin: center;
            transform: scale(0.6) rotateX(60deg);
        }

        .long-g--2 .leaf,
        .long-g--3 .leaf {
            -webkit-mask-image: linear-gradient(to top, transparent 50%, #079097 80%) !important;
        }

        .long-g--2 .leaf--1,
        .long-g--3 .leaf--1 {
            left: -1vmin;
            transform: rotateY(-180deg);
        }

        .long-g--3 {
            left: -17vmin;
            bottom: 0vmin;
        }

        .long-g--3 .leaf {
            -webkit-mask-image: linear-gradient(to top, transparent 40%, #079097 80%) !important;
        }

        .long-g--4 {
            left: 25vmin;
            bottom: -3vmin;
            transform-origin: center;
            transform: scale(0.6) rotateX(60deg);
        }

        .long-g--4 .leaf {
            -webkit-mask-image: linear-gradient(to top, transparent 50%, #079097 80%) !important;
        }

        .long-g--5 {
            left: 42vmin;
            bottom: 0vmin;
            transform: scale(0.8) rotate(2deg);
        }

        .long-g--6 {
            left: 0vmin;
            bottom: -20vmin;
            z-index: 100;
            filter: blur(0.3vmin);
            transform: scale(0.8) rotate(2deg);
        }

        .long-g--7 {
            left: 35vmin;
            bottom: 20vmin;
            z-index: -1;
            filter: blur(0.3vmin);
            transform: scale(0.6) rotate(2deg);
            opacity: 0.7;
        }

        .long-g .leaf {
            --w: 15vmin;
            --h: 40vmin;
            --c: #1aaa15;
            position: absolute;
            bottom: 0;
            width: var(--w);
            height: var(--h);
            border-top-left-radius: 100%;
            border-left: 2vmin solid var(--c);
            -webkit-mask-image: linear-gradient(to top, transparent 20%, var(--dark-color));
            transform-origin: bottom center;
        }

        .long-g .leaf--0 {
            left: 2vmin;
            animation: leaf-ans-1 4s linear infinite;
        }

        .long-g .leaf--1 {
            --w: 5vmin;
            --h: 60vmin;
            animation: leaf-ans-1 4s linear infinite;
        }

        .long-g .leaf--2 {
            --w: 10vmin;
            --h: 40vmin;
            left: -0.5vmin;
            bottom: 5vmin;
            transform-origin: bottom left;
            transform: rotateY(-180deg);
            animation: leaf-ans-2 3s linear infinite;
        }

        .long-g .leaf--3 {
            --w: 5vmin;
            --h: 30vmin;
            left: -1vmin;
            bottom: 3.2vmin;
            transform-origin: bottom left;
            transform: rotate(-10deg) rotateY(-180deg);
            animation: leaf-ans-3 3s linear infinite;
        }

        @keyframes leaf-ans-1 {

            0%,
            100% {
                transform: rotate(-5deg) scale(1);
            }

            50% {
                transform: rotate(5deg) scale(1.1);
            }
        }

        @keyframes leaf-ans-2 {

            0%,
            100% {
                transform: rotateY(-180deg) rotate(5deg);
            }

            50% {
                transform: rotateY(-180deg) rotate(0deg) scale(1.1);
            }
        }

        @keyframes leaf-ans-3 {

            0%,
            100% {
                transform: rotate(-10deg) rotateY(-180deg);
            }

            50% {
                transform: rotate(-20deg) rotateY(-180deg);
            }
        }

        .grow-ans {
            animation: grow-ans 2s var(--d) backwards;
        }

        @keyframes grow-ans {
            0% {
                transform: scale(0);
                opacity: 0;
            }
        }

        @keyframes light-ans {
            0% {
                opacity: 0;
                transform: translateY(0vmin);
            }

            25% {
                opacity: 1;
                transform: translateY(-5vmin) translateX(-2vmin);
            }

            50% {
                opacity: 1;
                transform: translateY(-15vmin) translateX(2vmin);
                filter: blur(0.2vmin);
            }

            75% {
                transform: translateY(-20vmin) translateX(-2vmin);
                filter: blur(0.2vmin);
            }

            100% {
                transform: translateY(-30vmin);
                opacity: 0;
                filter: blur(1vmin);
            }
        }

        @keyframes moving-flower-1 {

            0%,
            100% {
                transform: rotate(2deg);
            }

            50% {
                transform: rotate(-2deg);
            }
        }

        @keyframes moving-flower-2 {

            0%,
            100% {
                transform: rotate(18deg);
            }

            50% {
                transform: rotate(14deg);
            }
        }

        @keyframes moving-flower-3 {

            0%,
            100% {
                transform: rotate(-18deg);
            }

            50% {
                transform: rotate(-20deg) rotateY(-10deg);
            }
        }

        @keyframes blooming-leaf-right {
            0% {
                transform-origin: left;
                transform: rotate(70deg) rotateY(30deg) scale(0);
            }
        }

        @keyframes blooming-leaf-left {
            0% {
                transform-origin: right;
                transform: rotate(-70deg) rotateY(30deg) scale(0);
            }
        }

        @keyframes grow-flower-tree {
            0% {
                height: 0;
                border-radius: 1vmin;
            }
        }

        @keyframes blooming-flower {
            0% {
                transform: scale(0);
            }
        }

        @keyframes moving-grass {

            0%,
            100% {
                transform: rotate(-48deg) rotateY(40deg);
            }

            50% {
                transform: rotate(-50deg) rotateY(40deg);
            }
        }

        @keyframes moving-grass--2 {

            0%,
            100% {
                transform: scale(0.5) rotate(75deg) rotateX(10deg) rotateY(-200deg);
            }

            50% {
                transform: scale(0.5) rotate(79deg) rotateX(10deg) rotateY(-200deg);
            }
        }

        .growing-grass {
            animation: growing-grass-ans 1s 2s backwards;
        }

        @keyframes growing-grass-ans {
            0% {
                transform: scale(0);
            }
        }

        .not-loaded * {
            animation-play-state: paused !important;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .bodysec22 {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #282a36;
            font-size: 62.5%;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        @media screen and (max-width: 520px) {

            html,
            body {
                /* don't know how to set default units to rem in mojs :(( */
            }
        }

        .container-2 {
            width: 50rem;
            height: 20rem;
            position: relative;
        }

        .svg-container {
            z-index: 2;
            position: absolute;
        }

        .mo-container {
            width: 100%;
            height: 100%;
        }

        .line {
            fill: none;
            stroke: #ffffff;
            stroke-width: 8;
            stroke-linecap: round;
            stroke-miterlimit: 10;
        }

        .lttr {
            fill: #a5b9c7;
        }

        .sound {
            position: fixed;
            color: #a5b9c7;
            font-size: 1.6rem;
            bottom: 1rem;
            right: 1rem;
            text-decoration: underline;
            cursor: default;
        }

        .sound--off {
            text-decoration: line-through;
        }

        .bg_heart {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden
        }

        .heart {
            position: absolute;
            top: -50%;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -m-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .heart:before {
            position: absolute;
            top: -50%;
            left: 0;
            display: block;
            content: "";
            width: 100%;
            height: 100%;
            background: inherit;
            border-radius: 100%;
        }

        .heart:after {
            position: absolute;
            top: 0;
            right: -50%;
            display: block;
            content: "";
            width: 100%;
            height: 100%;
            background: inherit;
            border-radius: 100%;
        }

        @-webkit-keyframes love {
            0% {
                top: 110%
            }
        }

        @-moz-keyframes love {
            0% {
                top: 110%
            }
        }

        @-ms-keyframes love {
            0% {
                top: 110%
            }
        }

        @keyframes love {
            0% {
                top: 110%
            }
        }

        .overlay {
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 1);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .message {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
        }

        body {
            font-family: "Catamaran", sans-serif;
            font-optical-sizing: auto;
        }
    </style>
</head>

<body>
    <section id="section1" class="h-screen w-screen flex items-center justify-center relative overlay section1">
        <div class="mt-5 flex justify-center ">
            <div class="box z-50 bg-red-400">
                <div class="box-body">
                    <div class="img">
                        <span class="text-red-300" data-aos="fade-up">Klik Akuuu....</span>
                        <img onclick="scrollToSection('section2')" src="{{ asset('assets/img1.gif') }}">
                    </div>
                    <div class="box-lid">
                        <div class="box-bowtie"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0 pb-32 flex items-center justify-center">

        </div>
    </section> 
    <section id="section2" class="bodysect2 relative">
        @include('section2')
        <div class="absolute inset-0 pb-32 flex items-center justify-center">
            <div class="text-white text-center px-2">
                <span class="text-xl font-semibold mb-3" data-aos="zoom-in-up">Selamat Ulang Tahun Sayangg😘</span>
                <p data-aos="zoom-in-up" class="text-xl mt-5">Selamat juga udah bertahan sejauh ini,
                    Aku berharap kamu terus merasakan kebahagiaan di setiap langkah hidupmu,
                    terutama di hari spesial ini. Selamat ulang tahun, sayang❤️
                </p>
            </div>
        </div>
    </section>
    <section id="section3" class="h-screen w-screen relative">
        <div id="header-plugin"></div>
        <div class="bg_heart"></div>
        <div class="absolute inset-0 flex justify-center items-center backdrop-blur-sm">
            <div class="text-center px-2 py-9" data-aos="fade-up">
                <span class="text-2xl px-3 font-semibold">Hadirmu didunia ini adalah kebahagiaan 🥰</span>
                <p class="text-xl mt-3">kehadiranmu membawa kebahagiaan untuk orang-orang disekitarmu <br>Terima kasih karena udah lahir didunia ini😘
                </p>
            </div>
        </div>
    </section>
    <section id="section4" class="h-screen w-screen relative" style="background-image: url('{{ asset('assets/bg1.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 flex justify-center items-center">
            <div class="text-center text-white px-2 py-2 backdrop-blur-sm" data-aos="fade-up">
                <span class="text-2xl px-3 font-semibold">Ulang tahunmu adalah hari pertama dari perjalanan 365 hari lainnya.</span>
                <p class="text-xl mt-3">aku mencintaimu di hari ulang tahunmu, dan setiap hari, sekarangg dan selamanyaaaaa.
                    hidupmu dimuali pada hari ini. hidupku dimulai saat aku bertemu denganmu. <br>selamat ulang tahun sayangg.
                    selamat ulang tahun ciptaan tuhan yang paling indahhh. sejauh aku yang ketahui, <br>serta mulia sayanggg✨
                </p>
            </div>
        </div>
    </section>
    <section id="section4" class="h-screen w-screen relative flex items-center justify-center">
        <div class="relative mx-auto">
            <div class="bodysect2 relative h-screen w-screen" style="">
                @include('section2-1')
            </div>
        </div>
        <div class="absolute inset-0 pb-5 flex items-center justify-center text-white">
            <img data-aos="fade-up" src="{{ asset('assets/lov.jpg') }}" style="width: 100%;" />
        </div>
        <div class="absolute inset-x-0 bottom-0 pb-5 flex items-center justify-center text-white">
            <span class="mx-auto">Made with <span style="color: #e25555;">&hearts;</span> @wildan._.al</span>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src='https://cdn.jsdelivr.net/mojs/latest/mo.min.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- <script src="{{ asset('assets/script-sec2.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/script-sec3.js') }}"></script> -->
    <script>
        AOS.init();
    </script>
    <script>
        const qs = document.querySelector.bind(document);
        const easingHeart = mojs.easing.path(
            "M0,100C2.9,86.7,33.6-7.3,46-7.3s15.2,22.7,26,22.7S89,0,100,0");


        const el = {
            container: qs(".mo-container"),

            i: qs(".lttr--I"),
            l: qs(".lttr--L"),
            o: qs(".lttr--O"),
            v: qs(".lttr--V"),
            e: qs(".lttr--E"),
            y: qs(".lttr--Y"),
            o2: qs(".lttr--O2"),
            u: qs(".lttr--U"),

            lineLeft: qs(".line--left"),
            lineRight: qs(".line--rght"),

            colTxt: "#763c8c",
            colHeart: "#fa4843",

            blup: qs(".blup"),
            blop: qs(".blop"),
            sound: qs(".sound")
        };


        class Heart extends mojs.CustomShape {
            getShape() {
                return '<path d="M50,88.9C25.5,78.2,0.5,54.4,3.8,31.1S41.3,1.8,50,29.9c8.7-28.2,42.8-22.2,46.2,1.2S74.5,78.2,50,88.9z"/>';
            }
            getLength() {
                return 200;
            }
        }

        mojs.addShape("heart", Heart);

        const crtBoom = (delay = 0, x = 0, rd = 46) => {
            parent = el.container;
            const crcl = new mojs.Shape({
                shape: "circle",
                fill: "none",
                stroke: el.colTxt,
                strokeWidth: {
                    5: 0
                },
                radius: {
                    [rd]: [rd + 20]
                },
                easing: "quint.out",
                duration: 500 / 3,
                parent,
                delay,
                x
            });


            const brst = new mojs.Burst({
                radius: {
                    [rd + 15]: 110
                },
                angle: "rand(60, 180)",
                count: 3,
                timeline: {
                    delay
                },
                parent,
                x,
                children: {
                    radius: [5, 3, 7],
                    fill: el.colTxt,
                    scale: {
                        1: 0,
                        easing: "quad.in"
                    },
                    pathScale: [0.8, null],
                    degreeShift: ["rand(13, 60)", null],
                    duration: 1000 / 3,
                    easing: "quint.out"
                }
            });



            return [crcl, brst];
        };

        const crtLoveTl = () => {
            const move = 1000;
            const boom = 200;
            const easing = "sin.inOut";
            const easingBoom = "sin.in";
            const easingOut = "sin.out";
            const opts = {
                duration: move,
                easing,
                opacity: 1
            };
            const delta = 150;

            return new mojs.Timeline().add([
                new mojs.Tween({
                    duration: move,
                    onStart: () => {
                        [el.i, el.l, el.o, el.v, el.e, el.y, el.o2, el.u].forEach(el => {
                            el.style.opacity = 1;
                            el.style =
                                "transform: translate(0px, 0px) rotate(0deg) skew(0deg, 0deg) scale(1, 1); opacity: 1;";
                        });
                    },
                    onComplete: () => {
                        [el.l, el.o, el.v, el.e].forEach(el => el.style.opacity = 0);
                        el.blop.play();
                    }
                }),


                new mojs.Tween({
                    duration: move * 2 + boom,
                    onComplete: () => {
                        [el.y, el.o2].forEach(el => el.style.opacity = 0);
                        // el.blop.play();
                    }
                }),


                new mojs.Tween({
                    duration: move * 3 + boom * 2 - delta,
                    onComplete: () => {
                        el.i.style.opacity = 0;
                        el.blop.play();
                    }
                }),


                new mojs.Tween({
                    duration: move * 3 + boom * 2,
                    onComplete: () => {
                        el.u.style.opacity = 0;
                        el.blup.play();
                    }
                }),


                new mojs.Tween({
                    duration: 50,
                    delay: 4050,
                    onUpdate: progress => {
                        [el.i, el.l, el.o, el.v, el.e, el.y, el.o2, el.u].forEach(el => {
                            el.style = `transform: translate(0px, 0px) rotate(0deg) skew(0deg, 0deg) scale(1, 1); opacity: ${
        1 * progress
        };`;
                        });
                    },
                    onComplete: () => {
                        [el.i, el.l, el.o, el.v, el.e, el.y, el.o2, el.u].forEach(el => {
                            el.style.opacity = 1;
                            el.style =
                                "transform: translate(0px, 0px) rotate(0deg) skew(0deg, 0deg) scale(1, 1); opacity: 1;";
                        });
                    }
                }),


                new mojs.Html({
                    ...opts,
                    el: el.lineLeft,
                    x: {
                        0: 52
                    }
                }).

                then({
                    duration: boom + move,
                    easing,
                    x: {
                        to: 52 + 54
                    }
                }).

                then({
                    duration: boom + move,
                    easing,
                    x: {
                        to: 52 + 54 + 60
                    }
                }).

                then({
                    duration: 150, // 3550
                    easing,
                    x: {
                        to: 52 + 54 + 60 + 10
                    }
                }).

                then({
                    duration: 300
                }).

                then({
                    duration: 350,
                    x: {
                        to: 0
                    },
                    easing: easingOut
                }),


                new mojs.Html({
                    ...opts,
                    el: el.lineRight,
                    x: {
                        0: -52
                    }
                }).

                then({
                    duration: boom + move,
                    easing,
                    x: {
                        to: -52 - 54
                    }
                }).

                then({
                    duration: boom + move,
                    easing,
                    x: {
                        to: -52 - 54 - 60
                    }
                }).

                then({
                    duration: 150,
                    easing,
                    x: {
                        to: -52 - 54 - 60 - 10
                    }
                }).

                then({
                    duration: 300
                }).

                then({
                    duration: 350,
                    x: {
                        to: 0
                    },
                    easing: easingOut
                }),


                new mojs.Html({
                    // [I] LOVE YOU
                    ...opts,
                    el: el.i,
                    x: {
                        0: 34
                    }
                }).

                then({
                    duration: boom,
                    easing: easingBoom,
                    x: {
                        to: 34 + 19
                    }
                }).

                then({
                    duration: move,
                    easing,
                    x: {
                        to: 34 + 19 + 40
                    }
                }).

                then({
                    duration: boom,
                    easing: easingBoom,
                    x: {
                        to: 34 + 19 + 40 + 30
                    }
                }).

                then({
                    duration: move,
                    easing,
                    x: {
                        to: 34 + 19 + 40 + 30 + 30
                    }
                }),


                new mojs.Html({
                    // I [L]OVE YOU
                    ...opts,
                    el: el.l,
                    x: {
                        0: 15
                    }
                }),


                new mojs.Html({
                    // I L[O]VE YOU
                    ...opts,
                    el: el.o,
                    x: {
                        0: 11
                    }
                }),


                new mojs.Html({
                    // I LO[V]E YOU
                    ...opts,
                    el: el.v,
                    x: {
                        0: 3
                    }
                }),


                new mojs.Html({
                    // I LOV[E] YOU
                    ...opts,
                    el: el.e,
                    x: {
                        0: -3
                    }
                }),


                new mojs.Html({
                    // I LOVE [Y]OU
                    ...opts,
                    el: el.y,
                    x: {
                        0: -20
                    }
                }).

                then({
                    duration: boom,
                    easing: easingBoom,
                    x: {
                        to: -20 - 33
                    }
                }).

                then({
                    duration: move,
                    easing,
                    x: {
                        to: -20 - 33 - 24
                    }
                }),


                new mojs.Html({
                    // I LOVE Y[O]U
                    ...opts,
                    el: el.o2,
                    x: {
                        0: -27
                    }
                }).

                then({
                    duration: boom,
                    easing: easingBoom,
                    x: {
                        to: -27 - 27
                    }
                }).

                then({
                    duration: move,
                    easing,
                    x: {
                        to: -27 - 27 - 30
                    }
                }),


                new mojs.Html({
                    // I LOVE YO[U]
                    ...opts,
                    el: el.u,
                    x: {
                        0: -32
                    }
                }).

                then({
                    duration: boom,
                    easing: easingBoom,
                    x: {
                        to: -32 - 21
                    }
                }).

                then({
                    duration: move,
                    easing,
                    x: {
                        to: -32 - 21 - 36
                    }
                }).

                then({
                    duration: boom,
                    easing: easingBoom,
                    x: {
                        to: -32 - 21 - 36 - 31
                    }
                }).

                then({
                    duration: move,
                    easing,
                    x: {
                        to: -32 - 21 - 36 - 31 - 27
                    }
                }),


                new mojs.Shape({
                    parent: el.container,
                    shape: "heart",
                    delay: move,
                    fill: el.colHeart,
                    x: -64,
                    scale: {
                        0: 0.95,
                        easing: easingHeart
                    },
                    duration: 500
                }).

                then({
                    x: {
                        to: -62,
                        easing
                    },
                    scale: {
                        to: 0.65,
                        easing
                    },
                    duration: boom + move - 500
                }).

                then({
                    duration: boom - 50,
                    x: {
                        to: -62 + 48
                    },
                    scale: {
                        to: 0.9
                    },
                    easing: easingBoom
                }).

                then({
                    duration: 125,
                    scale: {
                        to: 0.8
                    },
                    easing: easingOut
                }).

                then({
                    duration: 125,
                    scale: {
                        to: 0.85
                    },
                    easing: easingOut
                }).

                then({
                    duration: move - 200,
                    scale: {
                        to: 0.45
                    },
                    easing
                }).

                then({
                    delay: -75,
                    duration: 150,
                    x: {
                        to: 0
                    },
                    scale: {
                        to: 0.9
                    },
                    easing: easingBoom
                }).

                then({
                    duration: 125,
                    scale: {
                        to: 0.8
                    },
                    easing: easingOut
                }).

                then({
                    duration: 125, // 3725
                    scale: {
                        to: 0.85
                    },
                    easing: easingOut
                }).

                then({
                    duration: 125 // 3850
                }).
                then({
                    duration: 350,
                    scale: {
                        to: 0
                    },
                    easing: easingOut
                }),


                ...crtBoom(move, -64, 46),
                ...crtBoom(move * 2 + boom, 18, 34),
                ...crtBoom(move * 3 + boom * 2 - delta, -64, 34),
                ...crtBoom(move * 3 + boom * 2, 45, 34)
            ]);

        };

        const loveTl = crtLoveTl().play();
        setInterval(() => {
            loveTl.replay();
        }, 4300);

        const volume = 0.2;
        el.blup.volume = volume;
        el.blop.volume = volume;

        const toggleSound = () => {
            let on = true;

            return () => {
                if (on) {
                    el.blup.volume = 0.0;
                    el.blop.volume = 0.0;
                    el.sound.classList.add("sound--off");
                } else {
                    // el.blup.volume = volume;
                    // el.blop.volume = volume;
                    // el.sound.classList.remove("sound--off");
                    el.blup.volume = 0.0;
                    el.blop.volume = 0.0;
                    el.sound.classList.add("sound--off");
                }
                on = !on;
            };
        };
        el.sound.addEventListener("click", toggleSound());
        // Start Section 3
        // Define a function that creates a heart element with random properties
        function createHeart() {
            const heart = document.createElement('div');
            heart.classList.add('heart');
            heart.style.width = `${Math.floor(Math.random() * 65) + 10}px`;
            heart.style.height = heart.style.width;
            heart.style.left = `${Math.floor(Math.random() * 100) + 1}%`;
            heart.style.background = `rgba(255, ${Math.floor(Math.random() * 25) + 100 - 25}, ${Math.floor(Math.random() * 25) + 100}, 1)`;
            const duration = Math.floor(Math.random() * 5) + 5;
            heart.style.animation = `love ${duration}s ease`;
            return heart;
        }

        // Get the container element where the hearts will be added
        const container = document.querySelector('.bg_heart');

        // Define a function that removes hearts that have gone off screen
        function removeHearts() {
            const hearts = container.querySelectorAll('.heart');
            hearts.forEach((heart) => {
                const top = parseFloat(getComputedStyle(heart).getPropertyValue('top'));
                const width = parseFloat(getComputedStyle(heart).getPropertyValue('width'));
                if (top <= -100 || width >= 150) {
                    heart.remove();
                }
            });
        }

        // Define a function that repeatedly adds hearts to the container
        function addHeart() {
            const heart1 = createHeart();
            const heart2 = createHeart();
            container.appendChild(heart1);
            container.appendChild(heart2);
            setTimeout(removeHearts, 1000);
        }
        const love = setInterval(addHeart, 600);
        // END Section 3
        // Fungsi untuk melakukan scroll ke bagian tertentu dengan ID yang diberikan
        function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
            console.log(sectionId);
            if (sectionId == 'section2') {
                document.getElementById('section1').style.display = 'none';
                const c = setTimeout(() => {
                    console.log('fower start');
                    $('#anim-sec2').removeClass('not-loaded');
                    clearTimeout(c);
                }, 1000);
                const x = setTimeout(() => {
                    console.log('fower start');
                    $('.sound').click();
                    $('.sound').click();
                    clearTimeout(x);
                }, 1000);
            }
        }

        $(window).on('scroll', function() {
            var sections = $('section[id^="section"]');
            var currentSection = null;

            sections.each(function() {
                if (isInViewport($(this))) {
                    currentSection = $(this);
                }
            });

            if (currentSection) {
                console.log('Pengguna berada di:', currentSection.attr('id'));

                if (currentSection.attr('id') == "section2") {
                    $('#anim-sec2').removeClass('not-loaded');
                }

                // Lakukan tindakan atau operasi lain di sini jika diperlukan
            }
        });


        function isInViewport(element) {
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            var elementTop = element.offset().top;
            var elementBottom = elementTop + element.outerHeight();

            return elementBottom > viewportTop && elementTop < viewportBottom;
        }
    </script>
</body>

</html>