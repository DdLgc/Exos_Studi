class UFOInput {
  constructor() {
      this.currentInput = null;
      window.onkeydown = this.updateCurrentInput.bind(this);
      window.onkeyup = this.nullifyCurrentInput.bind(this);
  }
  updateCurrentInput(event)
  {
      if (event.code === 'ArrowLeft') {
          this.currentInput = 'LEFT';
      } else if (event.code === 'ArrowRight') {
          this.currentInput = 'RIGHT';
      }
  }
  nullifyCurrentInput()
  {
      this.currentInput = null;
  }
  getCurrentInput()
  {
      return this.currentInput;
  }
}