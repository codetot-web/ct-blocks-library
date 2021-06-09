const { Component } = wp.element;

class BlockSave extends Component {
  render() {
    const className = `ct-blocks-divider`;

    return (
        <div className={ className }>
            <br className='ct-blocks-divider__line' />
        </div>
    );
  }
}

export default BlockSave;
