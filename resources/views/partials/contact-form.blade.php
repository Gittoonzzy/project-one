<form action="{{ url('sendForm') }}" id="{{ $formId }}" class="contact-form" method="post">
  @csrf
  <div class="field">
    <label for="{{ $formId }}-name">Name</label>
    <input type="text" id="{{ $formId }}-name" name="name" required autocomplete="name">
  </div>
  <div class="field">
    <label for="{{ $formId }}-phone">Phone number</label>
    <input type="tel" id="{{ $formId }}-phone" name="phone" required autocomplete="tel">
  </div>
  <div class="field">
    <label for="{{ $formId }}-email">Email</label>
    <input type="email" id="{{ $formId }}-email" name="email" required autocomplete="email">
  </div>
  <div class="field">
    <label for="{{ $formId }}-message">Message</label>
    <textarea id="{{ $formId }}-message" name="message" rows="5"></textarea>
  </div>
  <button type="submit" class="btn">Send message</button>
</form>
