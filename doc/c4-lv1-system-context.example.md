# 3. C4 — Level 1: System Context — <AppName>

# Example: FocusTasks

People:
- User
  Uses FocusTasks via web browser or mobile.

Systems:
- FocusTasks Application (our system)
- Notification Service (e.g., web push / OS notifications)
- (Future) Email Provider (for signup/password reset)

Relationships:
- User -> FocusTasks: creates, updates, views tasks, starts focus sessions.
- FocusTasks -> Notification Service: sends reminder and focus-session notifications.
- FocusTasks -> Email Provider: sends account-related emails (optional).

# Adapt for your app:
People:
- <Persona1> — <what they do>
- <Persona2> — <what they do>

Systems:
- <YourSystemName> (our system)
- <ExternalSystem1> — <purpose>
- <ExternalSystem2> — <purpose>

Relationships:
- <Persona1> -> <YourSystemName>: <short description of interaction>
- <YourSystemName> -> <ExternalSystem1>: <why/how>
