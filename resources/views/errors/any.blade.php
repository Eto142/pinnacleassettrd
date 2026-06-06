<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error {{ $exception->getStatusCode() ?? 'Error' }} | {{ config('app.name', 'Our Application') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4f46e5;
            --error-color: #dc2626;
            --text-color: #1f2937;
            --text-light: #6b7280;
            --bg-color: #f9fafb;
            --card-bg: #ffffff;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--bg-color);
            color: var(--text-color);
            text-align: center;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            line-height: 1.5;
        }
        
        .error-container {
            background: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            padding: 3rem;
            max-width: 600px;
            width: 90%;
            margin: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .error-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: var(--error-color);
        }
        
        h1 {
            font-size: 3.5rem;
            color: var(--error-color);
            margin: 0 0 1rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }
        
        .error-code {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-light);
            margin-bottom: 0.5rem;
        }
        
        .error-message {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary {
            background: var(--primary-color);
            color: white;
            border: 2px solid var(--primary-color);
        }
        
        .btn-primary:hover {
            background: #4338ca;
            border-color: #4338ca;
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }
        
        .btn-secondary:hover {
            background: rgba(79, 70, 229, 0.1);
            transform: translateY(-2px);
        }
        
        .error-icon {
            width: 48px;
            height: 48px;
        }
        
        footer {
            margin-top: 2rem;
            color: var(--text-light);
            font-size: 0.875rem;
        }
        
        @media (max-width: 640px) {
            .error-container {
                padding: 2rem 1.5rem;
            }
            
            h1 {
                font-size: 2.5rem;
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .actions {
                flex-direction: column;
                gap: 0.75rem;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>
            <svg class="error-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Error {{ $exception->getStatusCode() ?? 'Error' }}
        </h1>
        
        <div class="error-code">
            {{ $exception->getStatusCode() ? 'HTTP ' . $exception->getStatusCode() : 'Application Error' }}
        </div>
        
        <div class="error-message">
            {{ $exception->getMessage() ?? 'Something unexpected went wrong. Our team has been notified and we\'re working to fix it.' }}
        </div>
        
        <div class="actions">
            <a href="{{ url('/') }}" class="btn btn-primary">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Return Home
            </a>
            
            <a href="mailto:support@example.com" class="btn btn-secondary">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Contact Support
            </a>
        </div>
    </div>
    
    <footer>
        &copy; {{ date('Y') }} {{ config('app.name', 'Our Application') }}. All rights reserved.
    </footer>

    <script>
        // Simple animation on load
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.querySelector('.error-container');
            container.style.opacity = '0';
            container.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                container.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                container.style.opacity = '1';
                container.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>
</html>