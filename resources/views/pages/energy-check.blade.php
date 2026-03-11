@extends('layouts.app')

@section('title', 'Energiecheck | Volt-IT')
@section('description', 'Ontdek hoeveel potentieel jouw woning heeft voor slimme energieoptimalisatie met automatisatie, energiebeheer en integratie van technieken.')

@section('content')
<style>
    .energy-check-page {
        color: #1f2937;
    }

    .section {
        padding: 5rem 1.5rem;
    }

    .container {
        max-width: 1120px;
        margin: 0 auto;
    }

    .hero {
        padding: 5.5rem 1.5rem 4rem;
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        border-bottom: 1px solid #e5e7eb;
        color: #1f2937;
    }

    .hero::before {
        display: none;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 2rem;
        align-items: center;
    }

    .eyebrow {
        display: inline-block;
        margin-bottom: 1rem;
        padding: 0.4rem 0.75rem;
        border-radius: 999px;
        background: #eef2ff;
        color: #3730a3;
        font-size: 0.85rem;
        font-weight: 600;
    }

    .hero h1 {
        color: #111827;
    }

    .hero p.lead {
        margin: 0;
        max-width: 620px;
        font-size: 1.08rem;
        line-height: 1.8;
        color: #4b5563;
    }

    .hero-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 22px;
        padding: 1.5rem;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.06);
    }

    .hero-card h3 {
        margin: 0 0 1rem;
        font-size: 1.1rem;
        color: #111827;
    }

    .hero-card li {
        padding: 0.8rem 0;
        border-bottom: 1px solid #f1f5f9;
        color: #4b5563;
        line-height: 1.7;
    }

    .hero-card li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .check-shell {
        margin-top: -2rem;
        position: relative;
        z-index: 5;
    }

    .check-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.10);
        overflow: hidden;
    }

    .check-topbar {
        padding: 1.5rem 1.5rem 0;
    }

    .step-label-row {
        display: flex;
        justify-content: space-between;
        gap: 1rem;
        margin-bottom: 0.9rem;
        font-size: 0.95rem;
        color: #6b7280;
    }

    .progress-track {
        width: 100%;
        height: 10px;
        border-radius: 999px;
        background: #e5e7eb;
        overflow: hidden;
    }

    .progress-bar {
        width: 25%;
        height: 100%;
        border-radius: 999px;
        background: linear-gradient(90deg, #0ea5e9 0%, #22c55e 100%);
        transition: width 0.3s ease;
    }

    .check-body {
        padding: 1.5rem;
    }

    .question-header {
        margin-bottom: 1.75rem;
    }

    .question-header h2 {
        margin: 0 0 0.6rem;
        font-size: clamp(1.7rem, 4vw, 2.4rem);
        color: #111827;
        letter-spacing: -0.03em;
    }

    .question-header p {
        margin: 0;
        color: #4b5563;
        line-height: 1.8;
        max-width: 760px;
    }

    .step-pane {
        display: none;
    }

    .step-pane.active {
        display: block;
    }

    .options-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .option-card {
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        background: #ffffff;
        padding: 1.25rem;
        cursor: pointer;
        transition: 0.2s ease;
        min-height: 150px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .option-card:hover {
        border-color: #93c5fd;
        box-shadow: 0 10px 25px rgba(14, 165, 233, 0.08);
        transform: translateY(-1px);
    }

    .option-card.selected {
        border-color: #0ea5e9;
        background: #f0f9ff;
        box-shadow: 0 12px 28px rgba(14, 165, 233, 0.10);
    }

    .option-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #eff6ff;
        color: #0369a1;
        font-size: 1.3rem;
        margin-bottom: 1rem;
    }

    .option-card h3 {
        margin: 0 0 0.45rem;
        font-size: 1.08rem;
        color: #111827;
    }

    .option-card p {
        margin: 0;
        color: #6b7280;
        line-height: 1.65;
        font-size: 0.96rem;
    }

    .options-grid.multi .option-card {
        min-height: 130px;
    }

    .check-nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        padding: 1.25rem 1.5rem 1.5rem;
        border-top: 1px solid #f1f5f9;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.95rem 1.35rem;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.2s ease;
        border: 1px solid transparent;
        cursor: pointer;
        font-size: 0.98rem;
    }

    .btn-primary {
        background: #111827;
        color: #ffffff;
    }

    .btn-primary:hover {
        background: #000000;
    }

    .btn-secondary {
        background: #ffffff;
        color: #111827;
        border-color: #d1d5db;
    }

    .btn-secondary:hover {
        background: #f9fafb;
    }

    .btn[disabled] {
        opacity: 0.45;
        cursor: not-allowed;
    }

    .result-layout {
        display: grid;
        grid-template-columns: 1fr 0.95fr;
        gap: 1.5rem;
        align-items: stretch;
    }

    .result-main,
    .result-side {
        border: 1px solid #e5e7eb;
        border-radius: 22px;
        padding: 1.5rem;
        background: #ffffff;
    }

    .result-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 1rem;
        padding: 0.45rem 0.8rem;
        border-radius: 999px;
        background: #ecfeff;
        color: #0f766e;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .result-main h3 {
        margin: 0 0 0.8rem;
        font-size: 1.5rem;
        color: #111827;
        letter-spacing: -0.02em;
    }

    .result-main p {
        color: #4b5563;
        line-height: 1.8;
    }

    .result-score {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin: 1.5rem 0;
        flex-wrap: wrap;
    }

    .score-ring {
        width: 120px;
        height: 120px;
        border-radius: 999px;
        background: conic-gradient(#0ea5e9 0deg, #22c55e 0deg, #e5e7eb 0deg);
        display: grid;
        place-items: center;
        position: relative;
        flex-shrink: 0;
    }

    .score-ring::after {
        content: "";
        position: absolute;
        inset: 12px;
        border-radius: 999px;
        background: #ffffff;
    }

    .score-ring span {
        position: relative;
        z-index: 1;
        font-size: 1.4rem;
        font-weight: 700;
        color: #111827;
    }

    .score-meta strong {
        display: block;
        margin-bottom: 0.25rem;
        font-size: 1.15rem;
        color: #111827;
    }

    .score-meta p {
        margin: 0;
        color: #6b7280;
    }

    .savings-bar-wrap {
        margin-top: 1rem;
    }

    .savings-label {
        display: flex;
        justify-content: space-between;
        gap: 1rem;
        margin-bottom: 0.6rem;
        color: #4b5563;
        font-size: 0.95rem;
    }

    .savings-bar {
        height: 12px;
        border-radius: 999px;
        background: #e5e7eb;
        overflow: hidden;
    }

    .savings-bar-fill {
        width: 0;
        height: 100%;
        border-radius: 999px;
        background: linear-gradient(90deg, #0ea5e9 0%, #22c55e 100%);
        transition: width 0.45s ease;
    }

    .advice-list {
        list-style: none;
        margin: 1.5rem 0 0;
        padding: 0;
    }

    .advice-list li {
        padding: 0.75rem 0 0.75rem 1.7rem;
        position: relative;
        border-bottom: 1px solid #f1f5f9;
        color: #4b5563;
        line-height: 1.7;
    }

    .advice-list li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .advice-list li::before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 0.78rem;
        color: #16a34a;
        font-weight: 800;
    }

    .flow-card {
        background: #f8fafc;
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        padding: 1.25rem;
        margin-top: 1rem;
    }

    .flow-card h4 {
        margin: 0 0 1rem;
        color: #111827;
        font-size: 1rem;
    }

    .flow-line {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0.8rem;
        align-items: center;
    }

    .flow-node {
        border: 1px solid #dbeafe;
        background: #ffffff;
        border-radius: 16px;
        padding: 0.85rem;
        text-align: center;
        color: #0f172a;
        font-size: 0.92rem;
        min-height: 76px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .result-actions {
        margin-top: 1.5rem;
        display: flex;
        flex-wrap: wrap;
        gap: 0.9rem;
    }

    .muted-note {
        margin-top: 1rem;
        font-size: 0.9rem;
        color: #6b7280;
        line-height: 1.7;
    }

    .info-strip {
        margin-top: 2rem;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
    }

    .info-card {
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        padding: 1.2rem;
        background: #ffffff;
    }

    .info-card h4 {
        margin: 0 0 0.5rem;
        color: #111827;
    }

    .info-card p {
        margin: 0;
        color: #6b7280;
        line-height: 1.7;
    }

    .hero-card-list {
        list-style: none;
        margin: 1.25rem 0 0;
        padding: 0;
    }

    .hero-card-list li {
        padding: 0.8rem 0;
        border-bottom: 1px solid #f1f5f9;
        color: #4b5563;
        line-height: 1.7;
    }

    .hero-card-list li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .hero-energy-visual {
        margin-top: 0.5rem;
    }

    .hero-energy-line {
        display: grid;
        grid-template-columns: 1fr 26px 1fr 26px 1fr 26px 1fr;
        gap: 0.4rem;
        align-items: center;
    }

    .hero-energy-node {
        min-height: 98px;
        border-radius: 18px;
        border: 1px solid #dbeafe;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.45rem;
        padding: 0.9rem 0.6rem;
        text-align: center;
        box-shadow: 0 8px 20px rgba(15, 23, 42, 0.04);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .hero-energy-node.is-active {
        animation: heroEnergyPulse 2.8s ease-in-out infinite;
    }

    .hero-energy-node.delay-1 {
        animation-delay: 0.35s;
    }

    .hero-energy-node.delay-2 {
        animation-delay: 0.7s;
    }

    .hero-energy-node.delay-3 {
        animation-delay: 1.05s;
    }

    .hero-energy-icon {
        font-size: 1.35rem;
        line-height: 1;
    }

    .hero-energy-label {
        font-size: 0.85rem;
        color: #0f172a;
        line-height: 1.35;
        font-weight: 600;
    }

    .hero-energy-connector {
        position: relative;
        height: 6px;
        border-radius: 999px;
        background: #e5e7eb;
        overflow: hidden;
    }

    .hero-energy-connector::before {
        content: "";
        position: absolute;
        inset: 0;
        width: 45%;
        border-radius: 999px;
        background: linear-gradient(90deg, #0ea5e9 0%, #22c55e 100%);
        animation: heroConnectorFlow 2.4s linear infinite;
    }

    .dynamic-flow {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 0.75rem;
    }

    .dynamic-flow-node {
        min-width: 120px;
        min-height: 76px;
        border: 1px solid #dbeafe;
        background: #ffffff;
        border-radius: 16px;
        padding: 0.85rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 0.35rem;
        text-align: center;
        color: #0f172a;
        font-size: 0.92rem;
        line-height: 1.4;
    }

    .dynamic-flow-arrow {
        color: #0ea5e9;
        font-weight: 700;
        font-size: 1.1rem;
    }

    .result-deep-dive,
    .smart-zones-section,
    .report-capture-box {
        margin-top: 2rem;
    }

    .impact-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }

    .impact-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 1.5rem;
    }

    .impact-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #eff6ff;
        color: #0369a1;
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }

    .impact-card h3 {
        margin: 0 0 0.7rem;
        color: #111827;
        font-size: 1.08rem;
    }

    .impact-card p {
        margin: 0;
        color: #4b5563;
        line-height: 1.75;
    }

    .zones-layout {
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        gap: 1.5rem;
        align-items: start;
    }

    .zones-visual {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        background: #f8fafc;
        border: 1px solid #e5e7eb;
        border-radius: 22px;
        padding: 1.25rem;
    }

    .zone-button {
        border: 1px solid #e5e7eb;
        background: #ffffff;
        border-radius: 18px;
        padding: 1rem;
        min-height: 110px;
        text-align: center;
        cursor: pointer;
        transition: 0.2s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 0.45rem;
    }

    .zone-button:hover {
        border-color: #93c5fd;
        box-shadow: 0 10px 25px rgba(14, 165, 233, 0.08);
        transform: translateY(-1px);
    }

    .zone-button.active {
        border-color: #0ea5e9;
        background: #f0f9ff;
        box-shadow: 0 12px 28px rgba(14, 165, 233, 0.10);
    }

    .zone-icon {
        font-size: 1.3rem;
    }

    .zone-label {
        font-size: 0.94rem;
        font-weight: 600;
        color: #111827;
    }

    .zone-detail-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 22px;
        padding: 1.5rem;
        min-height: 100%;
    }

    .zone-detail-icon {
        width: 52px;
        height: 52px;
        border-radius: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #eff6ff;
        color: #0369a1;
        font-size: 1.4rem;
        margin-bottom: 1rem;
    }

    .zone-detail-card h3 {
        margin: 0 0 0.75rem;
        color: #111827;
        font-size: 1.25rem;
    }

    .zone-detail-card p {
        margin: 0 0 1rem;
        color: #4b5563;
        line-height: 1.8;
    }

    .zone-detail-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .zone-detail-list li {
        position: relative;
        padding: 0.7rem 0 0.7rem 1.6rem;
        border-bottom: 1px solid #f1f5f9;
        color: #4b5563;
        line-height: 1.7;
    }

    .zone-detail-list li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .zone-detail-list li::before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 0.75rem;
        color: #16a34a;
        font-weight: 800;
    }

    .report-capture-box {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 24px;
        padding: 1.75rem;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.06);
    }

    .report-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    @media (max-width: 960px) {
        .impact-grid,
        .zones-layout {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 640px) {
        .zones-visual {
            grid-template-columns: 1fr;
        }

        #energyCheckReportForm > div {
            grid-template-columns: 1fr !important;
        }

        .report-actions {
            flex-direction: column;
        }

        .report-actions .btn {
            width: 100%;
        }
    }

    @keyframes heroEnergyPulse {
        0%, 100% {
            transform: translateY(0);
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.04);
            border-color: #dbeafe;
        }
        50% {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(14, 165, 233, 0.12);
            border-color: #93c5fd;
        }
    }

    @keyframes heroConnectorFlow {
        0% {
            transform: translateX(-120%);
        }
        100% {
            transform: translateX(250%);
        }
    }

    @media (max-width: 960px) {
        .hero-grid,
        .result-layout,
        .info-strip,
        .flow-line {
            grid-template-columns: 1fr;
        }

        .options-grid {
            grid-template-columns: 1fr;
        }

        .check-shell {
            margin-top: -1.5rem;
        }
        .hero-energy-line {
            grid-template-columns: 1fr;
        }

        .hero-energy-connector {
            height: 24px;
            width: 6px;
            margin: 0 auto;
        }

        .hero-energy-connector::before {
            width: 100%;
            height: 45%;
            animation: heroConnectorFlowVertical 2.4s linear infinite;
        }

        .hero-energy-node {
            min-height: 82px;
        }
    }

    @media (max-width: 640px) {
        .section,
        .hero {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }

        .hero {
            padding-top: 4.5rem;
            padding-bottom: 3rem;
        }

        .check-body,
        .check-topbar,
        .check-nav {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .check-nav {
            flex-direction: column;
            align-items: stretch;
        }

        .check-nav .btn {
            width: 100%;
        }

        .result-score {
            align-items: flex-start;
        }
        #energyCheckReportForm > div {
            grid-template-columns: 1fr !important;
        }
    }
    @keyframes heroConnectorFlowVertical {
        0% {
            transform: translateY(-120%);
        }
        100% {
            transform: translateY(250%);
        }
    }
</style>

<div class="energy-check-page">
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow">Interactieve energiecheck</span>
                <h1>Ontdek hoe slim jouw woning kan worden.</h1>
                <p class="lead">
                    Beantwoord enkele korte vragen over je woning en krijg een visuele inschatting
                    van het potentieel voor energieoptimalisatie, automatisatie en slimme integratie
                    van technieken zoals zonnepanelen, batterij, warmtepomp en laadpaal.
                </p>
            </div>

            <aside class="hero-card">
                <h3>Visuele energieflow</h3>

                <div class="hero-energy-visual">
                    <div class="hero-energy-line">
                        <div class="hero-energy-node is-active">
                            <span class="hero-energy-icon">☀️</span>
                            <span class="hero-energy-label">Zonnepanelen</span>
                        </div>

                        <div class="hero-energy-connector"></div>

                        <div class="hero-energy-node is-active delay-1">
                            <span class="hero-energy-icon">🔋</span>
                            <span class="hero-energy-label">Batterij</span>
                        </div>

                        <div class="hero-energy-connector"></div>

                        <div class="hero-energy-node is-active delay-2">
                            <span class="hero-energy-icon">🏠</span>
                            <span class="hero-energy-label">Woning</span>
                        </div>

                        <div class="hero-energy-connector"></div>

                        <div class="hero-energy-node is-active delay-3">
                            <span class="hero-energy-icon">🚗</span>
                            <span class="hero-energy-label">Laadpaal</span>
                        </div>
                    </div>
                </div>

                <ul class="hero-card-list">
                    <li>Zie hoe technieken slim op elkaar afgestemd kunnen worden.</li>
                    <li>Ontvang een indicatieve optimalisatiescore voor jouw woning.</li>
                    <li>Krijg concrete aanbevelingen voor energiebeheer en automatisatie.</li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="section check-shell">
        <div class="container">
            <div class="check-card" id="energyCheckApp">
                <div class="check-topbar">
                    <div class="step-label-row">
                        <span id="stepLabel">Stap 1 van 4</span>
                        <span id="stepTitleMini">Type woning</span>
                    </div>
                    <div class="progress-track">
                        <div class="progress-bar" id="progressBar"></div>
                    </div>
                </div>

                <div class="check-body">
                    <div class="step-pane active" data-step="1">
                        <div class="question-header">
                            <h2>Wat voor type woning wil je slimmer maken?</h2>
                            <p>
                                Dit helpt om de context van de energiecheck beter te begrijpen.
                            </p>
                        </div>

                        <div class="options-grid single-select" data-group="propertyType">
                            <button type="button" class="option-card" data-value="nieuwbouw" data-points="10">
                                <div>
                                    <div class="option-icon">🏗️</div>
                                    <h3>Nieuwbouw</h3>
                                    <p>Ideaal om technieken vanaf de start doordacht te integreren.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="renovatie" data-points="12">
                                <div>
                                    <div class="option-icon">🛠️</div>
                                    <h3>Renovatie</h3>
                                    <p>Veel potentieel om woningtechniek slim te herstructureren.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="bestaande-woning" data-points="15">
                                <div>
                                    <div class="option-icon">🏠</div>
                                    <h3>Bestaande woning</h3>
                                    <p>Interessant voor retrofit en het slimmer laten samenwerken van technieken.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="appartement" data-points="8">
                                <div>
                                    <div class="option-icon">🏢</div>
                                    <h3>Appartement</h3>
                                    <p>Compacte automatisatie en energiesturing op maat van een beperkte installatie.</p>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="step-pane" data-step="2">
                        <div class="question-header">
                            <h2>Welke technieken zijn al aanwezig?</h2>
                            <p>
                                Selecteer alle elementen die vandaag al aanwezig zijn of binnenkort gepland zijn.
                            </p>
                        </div>

                        <div class="options-grid multi" data-group="technologies">
                            <button type="button" class="option-card" data-value="zonnepanelen" data-points="18">
                                <div>
                                    <div class="option-icon">☀️</div>
                                    <h3>Zonnepanelen</h3>
                                    <p>Eigen productie biedt veel kansen voor slimme sturing.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="batterij" data-points="14">
                                <div>
                                    <div class="option-icon">🔋</div>
                                    <h3>Thuisbatterij</h3>
                                    <p>Interessant om opwekking, opslag en verbruik beter op elkaar af te stemmen.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="warmtepomp" data-points="14">
                                <div>
                                    <div class="option-icon">🌡️</div>
                                    <h3>Warmtepomp</h3>
                                    <p>Een slimme sturing verhoogt comfort en benut energie beter.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="laadpaal" data-points="15">
                                <div>
                                    <div class="option-icon">🚗</div>
                                    <h3>Laadpaal</h3>
                                    <p>Laadmomenten kunnen slim afgestemd worden op productie en beschikbaar vermogen.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="zonwering" data-points="8">
                                <div>
                                    <div class="option-icon">🪟</div>
                                    <h3>Zonwering</h3>
                                    <p>Automatische sturing kan comfort én energieverbruik verbeteren.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="geen-sturing" data-points="16">
                                <div>
                                    <div class="option-icon">⚙️</div>
                                    <h3>Nog geen centrale sturing</h3>
                                    <p>Dat betekent vaak extra potentieel voor integratie en optimalisatie.</p>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="step-pane" data-step="3">
                        <div class="question-header">
                            <h2>Wat wil je vooral verbeteren?</h2>
                            <p>
                                Kies alle thema’s die voor jouw woning of project het belangrijkst zijn.
                            </p>
                        </div>

                        <div class="options-grid multi" data-group="goals">
                            <button type="button" class="option-card" data-value="energie-besparen" data-points="12">
                                <div>
                                    <div class="option-icon">📉</div>
                                    <h3>Minder energieverlies</h3>
                                    <p>Meer grip op verbruik, pieken en beschikbare energie.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="meer-comfort" data-points="7">
                                <div>
                                    <div class="option-icon">✨</div>
                                    <h3>Meer comfort</h3>
                                    <p>Automatisatie die dagelijkse handelingen logisch en eenvoudig maakt.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="slim-laden" data-points="10">
                                <div>
                                    <div class="option-icon">🔌</div>
                                    <h3>Slim laden</h3>
                                    <p>Laadpaalsturing op basis van zonneproductie of energiebeschikbaarheid.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="meer-inzicht" data-points="10">
                                <div>
                                    <div class="option-icon">📊</div>
                                    <h3>Meer inzicht</h3>
                                    <p>Monitoring van verbruik, opwekking en energiestromen in de woning.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="retrofit" data-points="11">
                                <div>
                                    <div class="option-icon">🔄</div>
                                    <h3>Retrofit zonder zware werken</h3>
                                    <p>Bestaande technieken slimmer maken met beperkte ingrepen.</p>
                                </div>
                            </button>

                            <button type="button" class="option-card" data-value="integratie" data-points="12">
                                <div>
                                    <div class="option-icon">🧩</div>
                                    <h3>Technieken beter integreren</h3>
                                    <p>Zonnepanelen, batterij, warmtepomp en laadpaal laten samenwerken als één geheel.</p>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="step-pane" data-step="4">
                        <div class="question-header">
                            <h2>Jouw energiecheck resultaat</h2>
                            <p>
                                Dit is een indicatieve inschatting op basis van de gekozen situatie. Het resultaat geeft
                                een beeld van het potentieel voor automatisatie, energiebeheer en slimme integratie.
                            </p>
                        </div>

                        <div class="result-layout">
                            <div class="result-main">
                                <div class="result-pill">Indicatieve analyse</div>
                                <h3 id="resultTitle">Jouw woning heeft een sterk optimalisatiepotentieel.</h3>
                                <p id="resultText">
                                    Op basis van je keuzes lijkt er een duidelijke meerwaarde te zijn in het slimmer
                                    laten samenwerken van aanwezige technieken en energieverbruikers.
                                </p>

                                <div class="result-score">
                                    <div class="score-ring" id="scoreRing">
                                        <span id="scorePercent">0%</span>
                                    </div>

                                    <div class="score-meta">
                                        <strong id="scoreHeading">Optimalisatiepotentieel</strong>
                                        <p id="scoreSubtext">Een eerste indicatie voor jouw woning of project.</p>
                                    </div>
                                </div>

                                <div class="savings-bar-wrap">
                                    <div class="savings-label">
                                        <span>Mogelijke optimalisatie</span>
                                        <strong id="savingsPercentLabel">0%</strong>
                                    </div>

                                    <div class="savings-bar">
                                        <div class="savings-bar-fill" id="savingsBarFill"></div>
                                    </div>
                                </div>

                                <ul class="advice-list" id="adviceList">
                                    <li>Voorlopig advies wordt opgebouwd op basis van je keuzes.</li>
                                </ul>

                                <div class="result-actions">
                                    <a href="{{ route('contact') }}" class="btn btn-primary">Bespreek jouw woning</a>
                                    <button type="button" class="btn btn-secondary" id="restartCheck">Nieuwe energiecheck starten</button>
                                </div>

                                <p class="muted-note">
                                    Deze check is een indicatieve inschatting en geen exacte energieberekening. Een
                                    concreet voorstel hangt af van de woning, de installatie en de gewenste sturing.
                                </p>
                            </div>

                            <aside class="result-side">
                                <h3>Dynamische energieflow</h3>
                                <p>
                                    Onderstaande flow past zich aan op basis van jouw selectie.
                                </p>

                                <div class="flow-card">
                                    <h4>Typische slimme energiestroom</h4>
                                    <div class="dynamic-flow" id="dynamicFlow"></div>
                                </div>

                                <div class="info-strip">
                                    <div class="info-card">
                                        <h4 id="summaryProperty">Woning</h4>
                                        <p id="summaryPropertyText">Nog geen selectie gemaakt.</p>
                                    </div>

                                    <div class="info-card">
                                        <h4>Technieken</h4>
                                        <p id="summaryTechText">Nog geen selectie gemaakt.</p>
                                    </div>

                                    <div class="info-card">
                                        <h4>Focus</h4>
                                        <p id="summaryGoalsText">Nog geen selectie gemaakt.</p>
                                    </div>
                                </div>
                            </aside>
                        </div>

                        <div class="result-deep-dive">
                            <div class="section-heading" style="margin-top:2rem;">
                                <h2>Waar zit de grootste winst?</h2>
                                <p>
                                    Op basis van jouw situatie liggen onderstaande verbeterpunten het meest voor de hand.
                                </p>
                            </div>

                            <div class="impact-grid" id="impactGrid">
                                <article class="impact-card">
                                    <div class="impact-icon">⚡</div>
                                    <h3>Eigen energie slimmer benutten</h3>
                                    <p>Gebruik zonneproductie op de juiste momenten binnen de woning.</p>
                                </article>

                                <article class="impact-card">
                                    <div class="impact-icon">🔄</div>
                                    <h3>Technieken beter afstemmen</h3>
                                    <p>Laat batterij, laadpaal en warmtepomp niet los van elkaar werken.</p>
                                </article>

                                <article class="impact-card">
                                    <div class="impact-icon">🧠</div>
                                    <h3>Meer logica in de woning</h3>
                                    <p>Breng comfort en energiebeheer samen in één duidelijke sturing.</p>
                                </article>
                            </div>
                        </div>

                        <div class="smart-zones-section">
                            <div class="section-heading" style="margin-top:2rem;">
                                <h2>Interactieve slimme woning</h2>
                                <p>
                                    Klik op een zone en ontdek waar automatisatie en energiebeheer in jouw woning
                                    het meeste verschil kunnen maken.
                                </p>
                            </div>

                            <div class="zones-layout">
                                <div class="zones-visual">
                                    <button type="button" class="zone-button active" data-zone="energiebeheer">
                                        <span class="zone-icon">⚡</span>
                                        <span class="zone-label">Energiebeheer</span>
                                    </button>

                                    <button type="button" class="zone-button" data-zone="laadpaal">
                                        <span class="zone-icon">🚗</span>
                                        <span class="zone-label">Laadpaal</span>
                                    </button>

                                    <button type="button" class="zone-button" data-zone="verwarming">
                                        <span class="zone-icon">🌡️</span>
                                        <span class="zone-label">Verwarming</span>
                                    </button>

                                    <button type="button" class="zone-button" data-zone="zonwering">
                                        <span class="zone-icon">🪟</span>
                                        <span class="zone-label">Zonwering</span>
                                    </button>

                                    <button type="button" class="zone-button" data-zone="verlichting">
                                        <span class="zone-icon">💡</span>
                                        <span class="zone-label">Verlichting</span>
                                    </button>
                                </div>

                                <div class="zone-detail-card">
                                    <div class="zone-detail-icon" id="zoneDetailIcon">⚡</div>
                                    <h3 id="zoneDetailTitle">Energiebeheer</h3>
                                    <p id="zoneDetailText">
                                        Slimme sturing zorgt ervoor dat productie, opslag en verbruik
                                        beter op elkaar afgestemd worden binnen de woning.
                                    </p>

                                    <ul class="zone-detail-list" id="zoneDetailList">
                                        <li>Meer gebruik van eigen zonne-energie</li>
                                        <li>Betere afstemming van verbruikers</li>
                                        <li>Meer inzicht in energiestromen</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success" style="margin-top:2rem;">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->has('form'))
                            <div class="alert" style="margin-top:2rem; background:#fef2f2; color:#991b1b; border:1px solid #fecaca;">
                                {{ $errors->first('form') }}
                            </div>
                        @endif

                        <div class="report-capture-box">
                            <div class="section-heading" style="margin-bottom:1.5rem;">
                                <h2>Ontvang jouw rapport per e-mail</h2>
                                <p>
                                    Laat je gegevens achter en ontvang een samenvatting van jouw energiecheck in je mailbox.
                                    Geen overdaad, gewoon een heldere eerste indicatie.
                                </p>
                            </div>

                            <form method="POST" action="{{ route('energy-check.report') }}" id="energyCheckReportForm" style="display:grid; gap:1rem;">
                                @csrf

                                <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:1rem;">
                                    <div>
                                        <label for="name" style="display:block; margin-bottom:0.5rem; font-weight:600;">Naam</label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div style="margin-top:0.35rem; color:#b91c1c; font-size:0.92rem;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="email" style="display:block; margin-bottom:0.5rem; font-weight:600;">E-mailadres</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div style="margin-top:0.35rem; color:#b91c1c; font-size:0.92rem;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div style="display:grid; grid-template-columns:repeat(3, 1fr); gap:1rem;">
                                    <div>
                                        <label for="phone" style="display:block; margin-bottom:0.5rem; font-weight:600;">Telefoon</label>
                                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                                    </div>

                                    <div>
                                        <label for="postcode" style="display:block; margin-bottom:0.5rem; font-weight:600;">Postcode</label>
                                        <input type="text" id="postcode" name="postcode" value="{{ old('postcode') }}">
                                    </div>

                                    <div>
                                        <label for="project_type" style="display:block; margin-bottom:0.5rem; font-weight:600;">Type project</label>
                                        <input type="text" id="project_type" name="project_type" value="{{ old('project_type') }}" placeholder="Nieuwbouw, renovatie...">
                                    </div>
                                </div>

                                <input type="hidden" name="property_type" id="report_property_type">
                                <input type="hidden" name="technologies" id="report_technologies">
                                <input type="hidden" name="goals" id="report_goals">
                                <input type="hidden" name="score" id="report_score">
                                <input type="hidden" name="savings_percent" id="report_savings_percent">
                                <input type="hidden" name="result_title" id="report_result_title">
                                <input type="hidden" name="result_text" id="report_result_text">
                                <input type="hidden" name="advice_items" id="report_advice_items">

                                <div class="report-actions">
                                    <button type="submit" class="btn btn-primary">Verstuur mijn rapport</button>
                                    <a href="{{ route('contact') }}" class="btn btn-secondary">Plan adviesgesprek</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="check-nav">
                    <button type="button" class="btn btn-secondary" id="prevStep">Vorige stap</button>
                    <button type="button" class="btn btn-primary" id="nextStep">Volgende stap</button>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
(function () {
    const app = document.getElementById('energyCheckApp');
    if (!app) return;

    const panes = Array.from(app.querySelectorAll('.step-pane'));
    const progressBar = document.getElementById('progressBar');
    const stepLabel = document.getElementById('stepLabel');
    const stepTitleMini = document.getElementById('stepTitleMini');
    const prevBtn = document.getElementById('prevStep');
    const nextBtn = document.getElementById('nextStep');
    const restartBtn = document.getElementById('restartCheck');
    const nav = document.querySelector('.check-nav');

    const stepNames = {
        1: 'Type woning',
        2: 'Aanwezige technieken',
        3: 'Doelen en wensen',
        4: 'Resultaat'
    };

    const state = {
        propertyType: null,
        technologies: [],
        goals: []
    };

    let currentStep = 1;

    const zoneContent = {
        energiebeheer: {
            icon: '⚡',
            title: 'Energiebeheer',
            text: 'Slimme sturing zorgt ervoor dat productie, opslag en verbruik beter op elkaar afgestemd worden binnen de woning.',
            list: [
                'Meer gebruik van eigen zonne-energie',
                'Betere afstemming van verbruikers',
                'Meer inzicht in energiestromen'
            ]
        },
        laadpaal: {
            icon: '🚗',
            title: 'Laadpaal',
            text: 'Een slimme laadstrategie zorgt ervoor dat laden gebeurt op de gunstigste momenten binnen jouw energiesysteem.',
            list: [
                'Laden op basis van zonneproductie',
                'Minder impact op piekverbruik',
                'Meer logica in energieverdeling'
            ]
        },
        verwarming: {
            icon: '🌡️',
            title: 'Verwarming / warmtepomp',
            text: 'Verwarming of warmtepomp slim sturen verhoogt comfort en benut beschikbare energie beter.',
            list: [
                'Betere timing van verwarming',
                'Afstemming met energieproductie',
                'Meer comfort zonder overmatige sturing'
            ]
        },
        zonwering: {
            icon: '🪟',
            title: 'Zonwering',
            text: 'Automatische zonwering helpt om comfort te verhogen en oververhitting of onnodige koelvraag te beperken.',
            list: [
                'Minder oververhitting',
                'Meer comfort in de woning',
                'Betere samenwerking met andere technieken'
            ]
        },
        verlichting: {
            icon: '💡',
            title: 'Verlichting',
            text: 'Slimme verlichting verhoogt gebruiksgemak en helpt de woning logischer reageren op aanwezigheid en situaties.',
            list: [
                'Automatische scènes en sferen',
                'Aanwezigheidsafhankelijke sturing',
                'Meer comfort in dagelijks gebruik'
            ]
        }
    };

    const groups = app.querySelectorAll('[data-group]');

    groups.forEach(group => {
        const isSingle = group.classList.contains('single-select');
        const cards = group.querySelectorAll('.option-card');

        cards.forEach(card => {
            card.addEventListener('click', function () {
                const value = this.dataset.value;

                if (isSingle) {
                    cards.forEach(c => c.classList.remove('selected'));
                    this.classList.add('selected');

                    state[group.dataset.group] = {
                        value: value,
                        points: Number(this.dataset.points || 0),
                        label: this.querySelector('h3')?.textContent?.trim() || value
                    };
                } else {
                    this.classList.toggle('selected');

                    const selected = Array.from(cards)
                        .filter(c => c.classList.contains('selected'))
                        .map(c => ({
                            value: c.dataset.value,
                            points: Number(c.dataset.points || 0),
                            label: c.querySelector('h3')?.textContent?.trim() || c.dataset.value
                        }));

                    state[group.dataset.group] = selected;
                }

                updateButtons();
            });
        });
    });

    function animateScore(targetScore) {
        let current = 0;
        const scoreElement = document.getElementById('scorePercent');

        scoreElement.textContent = '0%';

        const interval = setInterval(() => {
            current++;
            scoreElement.textContent = current + '%';

            if (current >= targetScore) {
                clearInterval(interval);
            }
        }, 15);
    }

    function updateUI() {
        panes.forEach(pane => {
            pane.classList.toggle('active', Number(pane.dataset.step) === currentStep);
        });

        const progress = (currentStep / panes.length) * 100;
        progressBar.style.width = progress + '%';
        stepLabel.textContent = 'Stap ' + currentStep + ' van ' + panes.length;
        stepTitleMini.textContent = stepNames[currentStep];

        prevBtn.style.visibility = currentStep === 1 ? 'hidden' : 'visible';
        nextBtn.textContent = currentStep === 3 ? 'Bekijk resultaat' : 'Volgende stap';

        if (currentStep === 4) {
            nav.style.display = 'none';
        } else {
            nav.style.display = 'flex';
        }

        updateButtons();
    }

    function isStepValid(step) {
        if (step === 1) {
            return !!state.propertyType;
        }

        if (step === 2) {
            return Array.isArray(state.technologies) && state.technologies.length > 0;
        }

        if (step === 3) {
            return Array.isArray(state.goals) && state.goals.length > 0;
        }

        return true;
    }

    function updateButtons() {
        nextBtn.disabled = currentStep < 4 ? !isStepValid(currentStep) : false;
    }

    function calculateResult() {
        const propertyPoints = state.propertyType?.points || 0;
        const techPoints = (state.technologies || []).reduce((sum, item) => sum + item.points, 0);
        const goalPoints = (state.goals || []).reduce((sum, item) => sum + item.points, 0);

        const rawScore = propertyPoints + techPoints + goalPoints;
        const cappedScore = Math.min(100, rawScore);

        let estimatedSavings = Math.round(cappedScore * 0.42);
        estimatedSavings = Math.max(8, Math.min(40, estimatedSavings));

        let title = 'Jouw woning heeft een interessant optimalisatiepotentieel.';
        let text = 'Er zijn duidelijke kansen om technieken beter op elkaar af te stemmen en energie slimmer te gebruiken.';

        if (cappedScore >= 75) {
            title = 'Jouw woning heeft een sterk optimalisatiepotentieel.';
            text = 'De combinatie van aanwezige technieken en je gekozen doelen wijst op een sterke meerwaarde voor energiebeheer en slimme automatisatie.';
        } else if (cappedScore >= 50) {
            title = 'Jouw woning heeft een duidelijk potentieel voor slimme sturing.';
            text = 'Met een gerichte integratie van technieken kan je meer comfort, inzicht en energie-efficiëntie realiseren.';
        }

        const advice = [];
        const techValues = (state.technologies || []).map(item => item.value);
        const goalValues = (state.goals || []).map(item => item.value);

        if (techValues.includes('zonnepanelen')) {
            advice.push('Koppel zonneproductie aan slim verbruik om meer eigen energie direct te benutten.');
        }

        if (techValues.includes('laadpaal')) {
            advice.push('Laat de laadpaal sturen op beschikbare zonne-energie of ingestelde laadvensters.');
        }

        if (techValues.includes('warmtepomp')) {
            advice.push('Stuur de warmtepomp mee op comfort en energiebeschikbaarheid in plaats van louter vaste schema’s.');
        }

        if (techValues.includes('batterij')) {
            advice.push('Gebruik de batterij als onderdeel van een bredere energieflow, niet als los element.');
        }

        if (goalValues.includes('retrofit')) {
            advice.push('Bekijk retrofit-oplossingen waarmee bestaande woningtechniek slimmer wordt zonder zware ingrepen.');
        }

        if (goalValues.includes('integratie') || techValues.includes('geen-sturing')) {
            advice.push('Breng technieken samen in één centrale logica zodat verbruikers en energiebronnen beter samenwerken.');
        }

        if (goalValues.includes('meer-inzicht')) {
            advice.push('Voorzie monitoring van verbruik, opwekking en energiestromen om slimmer te kunnen sturen.');
        }

        if (advice.length < 3) {
            advice.push('Een eerste technische analyse kan snel duidelijk maken waar de grootste winst in jouw woning zit.');
        }

        return {
            score: cappedScore,
            savings: estimatedSavings,
            title,
            text,
            advice: advice.slice(0, 5)
        };
    }

    function renderDynamicFlow() {
        const techValues = (state.technologies || []).map(item => item.value);
        const goalValues = (state.goals || []).map(item => item.value);

        let flow = [];

        if (techValues.includes('zonnepanelen')) {
            flow.push({ icon: '☀️', label: 'Zonnepanelen' });
        }

        if (techValues.includes('batterij')) {
            flow.push({ icon: '🔋', label: 'Batterij' });
        }

        flow.push({ icon: '🏠', label: 'Woning' });

        if (techValues.includes('warmtepomp')) {
            flow.push({ icon: '🌡️', label: 'Warmtepomp' });
        }

        if (techValues.includes('laadpaal')) {
            flow.push({ icon: '🚗', label: 'Laadpaal' });
        }

        if (!techValues.includes('zonnepanelen') && !techValues.includes('batterij') && goalValues.includes('retrofit')) {
            flow = [
                { icon: '⚙️', label: 'Bestaande technieken' },
                { icon: '🧠', label: 'Slimme sturing' },
                { icon: '🏠', label: 'Woning' }
            ];
        }

        const flowHtml = flow.map((item, index) => {
            const node = `
                <div class="dynamic-flow-node">
                    <div style="font-size:1.25rem;">${item.icon}</div>
                    <div>${item.label}</div>
                </div>
            `;

            const arrow = index < flow.length - 1
                ? `<div class="dynamic-flow-arrow">→</div>`
                : '';

            return node + arrow;
        }).join('');

        document.getElementById('dynamicFlow').innerHTML = flowHtml;
    }

    function renderImpactCards() {
        const techValues = (state.technologies || []).map(item => item.value);
        const goalValues = (state.goals || []).map(item => item.value);

        const impacts = [];

        if (techValues.includes('zonnepanelen')) {
            impacts.push({
                icon: '☀️',
                title: 'Eigen energie slimmer benutten',
                text: 'Gebruik zonneproductie op de juiste momenten en stem verbruikers beter af op beschikbare energie.'
            });
        }

        if (techValues.includes('laadpaal')) {
            impacts.push({
                icon: '🚗',
                title: 'Slim laden op het juiste moment',
                text: 'Laad de wagen wanneer dat energetisch het meest interessant is voor de woning.'
            });
        }

        if (techValues.includes('warmtepomp')) {
            impacts.push({
                icon: '🌡️',
                title: 'Warmtepomp beter integreren',
                text: 'Laat verwarming samenwerken met productie, comfort en andere verbruikers.'
            });
        }

        if (goalValues.includes('retrofit')) {
            impacts.push({
                icon: '🔄',
                title: 'Retrofit zonder overcomplexiteit',
                text: 'Ook in bestaande woningen zijn gerichte optimalisaties mogelijk zonder zware ingrepen.'
            });
        }

        if (goalValues.includes('integratie') || techValues.includes('geen-sturing')) {
            impacts.push({
                icon: '🧩',
                title: 'Technieken logisch samenbrengen',
                text: 'Laat batterij, laadpaal, verwarming en sturing functioneren als één coherent systeem.'
            });
        }

        while (impacts.length < 3) {
            impacts.push({
                icon: '🧠',
                title: 'Meer logica in de woning',
                text: 'Breng comfort, inzicht en energiebeheer samen in een duidelijke en bruikbare aanpak.'
            });
        }

        document.getElementById('impactGrid').innerHTML = impacts.slice(0, 3).map(item => `
            <article class="impact-card">
                <div class="impact-icon">${item.icon}</div>
                <h3>${item.title}</h3>
                <p>${item.text}</p>
            </article>
        `).join('');
    }

    function renderZoneDetail(zoneKey) {
        const zone = zoneContent[zoneKey];
        if (!zone) return;

        document.getElementById('zoneDetailIcon').textContent = zone.icon;
        document.getElementById('zoneDetailTitle').textContent = zone.title;
        document.getElementById('zoneDetailText').textContent = zone.text;
        document.getElementById('zoneDetailList').innerHTML = zone.list.map(item => `<li>${item}</li>`).join('');
    }

    function bindZoneButtons() {
        const zoneButtons = document.querySelectorAll('.zone-button');

        zoneButtons.forEach(button => {
            button.addEventListener('click', function () {
                zoneButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                renderZoneDetail(this.dataset.zone);
            });
        });
    }

    function renderResult() {
        const result = calculateResult();

        document.getElementById('resultTitle').textContent = result.title;
        document.getElementById('resultText').textContent = result.text;
        document.getElementById('savingsPercentLabel').textContent = result.savings + '%';

        const savingsBarFill = document.getElementById('savingsBarFill');
        savingsBarFill.style.width = result.savings + '%';

        const scoreRing = document.getElementById('scoreRing');
        const degrees = Math.round((result.score / 100) * 360);
        scoreRing.style.background = 'conic-gradient(#0ea5e9 0deg, #22c55e ' + degrees + 'deg, #e5e7eb ' + degrees + 'deg)';

        const adviceList = document.getElementById('adviceList');
        adviceList.innerHTML = result.advice.map(item => '<li>' + item + '</li>').join('');

        document.getElementById('summaryPropertyText').textContent =
            state.propertyType?.label || 'Niet geselecteerd';

        document.getElementById('summaryTechText').textContent =
            (state.technologies || []).map(item => item.label).join(', ') || 'Niet geselecteerd';

        document.getElementById('summaryGoalsText').textContent =
            (state.goals || []).map(item => item.label).join(', ') || 'Niet geselecteerd';

        document.getElementById('report_property_type').value =
            state.propertyType?.label || '';

        document.getElementById('report_technologies').value =
            (state.technologies || []).map(item => item.label).join('|');

        document.getElementById('report_goals').value =
            (state.goals || []).map(item => item.label).join('|');

        document.getElementById('report_score').value = result.score;
        document.getElementById('report_savings_percent').value = result.savings;
        document.getElementById('report_result_title').value = result.title;
        document.getElementById('report_result_text').value = result.text;
        document.getElementById('report_advice_items').value = result.advice.join('|');

        animateScore(result.score);
        renderDynamicFlow();
        renderImpactCards();
        renderZoneDetail('energiebeheer');
    }

    prevBtn.addEventListener('click', function () {
        if (currentStep > 1) {
            currentStep--;
            updateUI();
        }
    });

    nextBtn.addEventListener('click', function () {
        if (currentStep < 3) {
            if (!isStepValid(currentStep)) return;
            currentStep++;
            updateUI();
            return;
        }

        if (currentStep === 3) {
            if (!isStepValid(currentStep)) return;
            currentStep = 4;
            renderResult();
            updateUI();
        }
    });

    if (restartBtn) {
        restartBtn.addEventListener('click', function () {
            state.propertyType = null;
            state.technologies = [];
            state.goals = [];

            app.querySelectorAll('.option-card').forEach(card => card.classList.remove('selected'));

            document.getElementById('scorePercent').textContent = '0%';
            document.getElementById('savingsPercentLabel').textContent = '0%';
            document.getElementById('savingsBarFill').style.width = '0%';
            document.getElementById('dynamicFlow').innerHTML = '';
            document.getElementById('impactGrid').innerHTML = '';
            document.getElementById('summaryPropertyText').textContent = 'Nog geen selectie gemaakt.';
            document.getElementById('summaryTechText').textContent = 'Nog geen selectie gemaakt.';
            document.getElementById('summaryGoalsText').textContent = 'Nog geen selectie gemaakt.';

            currentStep = 1;
            updateUI();
        });
    }

    bindZoneButtons();
    updateUI();
})();
</script>
@endsection