<div class="clients-section">
    <div class="client-grid">
        @foreach($clients as $client)
            <div class="client-card" data-aos="fade-up">
                <img src="{{ asset('storage/' . $client->logo_url) }}" alt="{{ $client->name }}" class="client-logo">
                <div class="client-info">
                    <h4>{{ $client->name }}</h4>
                    <p>{{ Str::limit($client->description, 100) }}</p>
                    <a href="{{ $client->project_url }}" class="project-link" target="_blank">View Project</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<style>
    .clients-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px 20px;
}

.client-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
}

.client-card {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
    text-align: center;
    padding: 20px;
    opacity: 0;
}

.client-logo {
    max-width: 100px;
    margin-bottom: 10px;
    transition: transform 0.3s ease;
}

.client-info h4 {
    font-size: 1.2em;
    color: #333;
}

.client-info p {
    color: #666;
    font-size: 0.9em;
}

.project-link {
    display: inline-block;
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    margin-top: 10px;
    transition: color 0.3s ease;
}

.project-link:hover {
    color: #0056b3;
}

.client-card:hover {
    transform: translateY(-10px);
}

.client-card:hover .client-logo {
    transform: scale(1.1);
}

/* Animation on scroll */
.aos-animate {
    opacity: 1 !important;
}

</style>