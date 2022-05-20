const Card = require('./card');

let card;

beforeEach(() => {
    card = new Card('');
  });

test('when we create a card, it should not be visible', () => {
    expect(card.state).toBe(0);
});

test('when we turn a card that was not visible, it should be visible', () => {
    card.state = 0;
    card.turn();
    expect(card.state).toBe(1);
});

test('when we turn a card that was visible, it should not be visible', () => {
    card.state = 1;
    card.turn();
    expect(card.state).toBe(0);
});