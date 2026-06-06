<?php
/*
    ResQLink AI provider settings.
    Keep this file on the server only. Never put API keys in JavaScript.
*/

// Use: gemini or openai
define('AI_PROVIDER', 'gemini');

// Gemini settings
define('GEMINI_API_KEY', 'PASTE_YOUR_GEMINI_API_KEY_HERE');
define('GEMINI_MODEL', 'gemini-2.0-flash');

// OpenAI settings. Only needed if AI_PROVIDER is openai
define('OPENAI_API_KEY', 'PASTE_YOUR_OPENAI_API_KEY_HERE');
define('OPENAI_MODEL', 'gpt-4.1');

// Safety and cost controls
define('AI_MAX_OUTPUT_TOKENS', 700);
define('AI_TEMPERATURE', 0.25);